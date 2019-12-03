<?php

namespace App\Http\Controllers;

use App\TeditoraModel;
use Illuminate\Http\Request;

class TeditoraController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {      
        $editoras = TeditoraModel::orderBy('nome')
                ->get();
        return view('editora.editoraHome', compact('editoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('editora.editoraNovo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $editora = new TeditoraModel;
        $editora->nome = $request->nome;
        $editora->save();
        $messagem = 'Editora "'. $request->nome. '" cadastrada com sucesso.';
        return redirect('editoraHome')
                        ->with('messagemEditora', $messagem);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeditoraModel  $teditoraModel
     * @return \Illuminate\Http\Response
     */
    public function show(TeditoraModel $teditoraModel) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeditoraModel  $teditoraModel
     * @return \Illuminate\Http\Response
     */
    public function edit($ideditora) {
        $editora = TeditoraModel::where('ideditora', $ideditora)
                ->first();
        return view('editora.editoraEditar', compact('editora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeditoraModel  $teditoraModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $editora = TeditoraModel::find($request->ideditora);
        $editora->nome = $request->nome;
        $editora->save();
        $messagem = 'Editora "' . $request->nome . '" editada com sucesso.';
        return redirect('editoraHome')
                        ->with('messagemEditora', $messagem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeditoraModel  $teditoraModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($ideditora) {
        $editora = TeditoraModel::findOrFail($ideditora);
        $editora->delete();
        $messagem = 'Editora "' . $editora->nome . '" apagada com sucesso.';
        return redirect('editoraHome')
                        ->with('messagemEditora', $messagem);
    }

}
