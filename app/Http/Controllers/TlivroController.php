<?php

namespace App\Http\Controllers;

use App\TlivroModel;
use Illuminate\Http\Request;
use App\TautorModel;
use App\TeditoraModel;
use App\TgeneroliterarioModel;

class TlivroController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $livros = TlivroModel::select('*', 'tautor.nome as nomeautor', 'teditora.nome as nomeeditora', 'tgeneroliterario.nome as nomegeneroliterario')
                //"DATE_FORMAT( tlivro.created_at, '%d/%m/%Y' ) as criadorpor"
                ->join('tautor', 'tlivro.idautor', '=', 'tautor.idautor')
                ->join('teditora', 'tlivro.ideditora', '=', 'teditora.ideditora')
                ->join('tgeneroliterario', 'tlivro.idgeneroliterario', '=', 'tgeneroliterario.idgeneroliterario')
                ->orderBy('tlivro.idlivro')
                ->get();
        return view('livro.livroHome', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $autors = TautorModel::orderBy('nome')
                ->get();
        $generoliterarios = TgeneroliterarioModel::orderBy('nome')
                ->get();
        $editoras = TeditoraModel::orderBy('nome')
                ->get();
        return view('livro.livroNovo', compact('autors', 'generoliterarios', 'editoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $livro = new TlivroModel;
        $livro->titulo = $request->titulo;
        $livro->anolancamento = $request->anolancamento;
        $livro->idautor = $request->idautor;
        $livro->idgeneroliterario = $request->idgeneroliterario;
        $livro->ideditora = $request->ideditora;
        $livro->save();
        $messagem = 'Livro "' . $request->titulo . '" cadastrado com sucesso.';
        return redirect('livroHome')
                        ->with('messagemLivro', $messagem);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TlivroModel  $tlivroModel
     * @return \Illuminate\Http\Response
     */
    public function show(TlivroModel $tlivroModel) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TlivroModel  $tlivroModel
     * @return \Illuminate\Http\Response
     */
    public function edit($idlivro) {
        $livro = TlivroModel::where('idlivro', $idlivro)
                ->first();
        $autors = TautorModel::orderBy('nome')
                ->get();
        $generoliterarios = TgeneroliterarioModel::orderBy('nome')
                ->get();
        $editoras = TeditoraModel::orderBy('nome')
                ->get();
        return view('livro.livroEditar', compact('livro', 'autors', 'generoliterarios', 'editoras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TlivroModel  $tlivroModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $livro = TlivroModel::find($request->idlivro);
        $livro->titulo = $request->titulo;
        $livro->anolancamento = $request->anolancamento;
        $livro->idautor = $request->idautor;
        $livro->idgeneroliterario = $request->idgeneroliterario;
        $livro->ideditora = $request->ideditora;
        $livro->save();
        $messagem = 'Livro "' . $request->titulo . '" editado com sucesso.';
        return redirect('livroHome')
                        ->with('messagemLivro', $messagem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TlivroModel  $tlivroModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($idlivro) {
        $livro = TlivroModel::findOrFail($idlivro);
        $livro->delete();
        $messagem = 'Livro "' . $livro->titulo . '" apagado com sucesso.';
        return redirect('livroHome')
                        ->with('messagemLivro', $messagem);
    }

}
