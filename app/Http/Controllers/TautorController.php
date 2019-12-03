<?php

namespace App\Http\Controllers;

use App\TautorModel;
use Illuminate\Http\Request;

class TautorController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $autors = TautorModel::orderBy('nome')
                ->get();
        return view('autor.autorHome', compact('autors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('autor.autorNovo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $autor = new TautorModel;
        $autor->nome = $request->nome;
        $autor->anonascimento = $request->anonascimento;
        $autor->sexo = $request->sexo;
        $autor->nascionalidade = $request->nascionalidade;
        $autor->save();
        $messagem = 'Autor "'. $request->nome. '" cadastrado com sucesso.';
        return redirect('autorHome')
                        ->with('messagemAutor', $messagem);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TautorModel  $tautorModel
     * @return \Illuminate\Http\Response
     */
    public function show(TautorModel $tautorModel) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TautorModel  $tautorModel
     * @return \Illuminate\Http\Response
     */
    public function edit($idautor) {
        $autor = TautorModel::where('idautor', $idautor)
                ->first();
        return view('autor.autorEditar', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TautorModel  $tautorModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $autor = TautorModel::find($request->idautor);
        $autor->nome = $request->nome;
        $autor->anonascimento = $request->anonascimento;
        $autor->sexo = $request->sexo;
        $autor->nascionalidade = $request->nascionalidade;
        $autor->save();
        $messagem = 'Autor "' . $request->nome . '" editado com sucesso.';
        return redirect('autorHome')
                        ->with('messagemAutor', $messagem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TautorModel  $tautorModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($idautor) {
        $autor = TautorModel::findOrFail($idautor);
        $autor->delete();
        $messagem = 'Autor "' . $autor->nome . '" apagado com sucesso.';
        return redirect('autorHome')
                        ->with('messagemAutor', $messagem);
    }

}
