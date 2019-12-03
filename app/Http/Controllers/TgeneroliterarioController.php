<?php

namespace App\Http\Controllers;

use App\TgeneroliterarioModel;
use Illuminate\Http\Request;

class TgeneroliterarioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $generoliterarios = TgeneroliterarioModel::orderBy('nome')
                ->get();
        return view('generoliterario.generoliterarioHome', compact('generoliterarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('generoliterario.generoliterarioNovo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $generoliterario = new TgeneroliterarioModel;
        $generoliterario->nome = $request->nome;
        $generoliterario->save();
        $messagem = 'Gênero Literário "'. $request->nome. '" cadastrado com sucesso.';
        return redirect('generoliterarioHome')
                        ->with('messagemGeneroliterario', $messagem);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TgeneroliterarioModel  $tgeneroliterarioModel
     * @return \Illuminate\Http\Response
     */
    public function show(TgeneroliterarioModel $tgeneroliterarioModel) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TgeneroliterarioModel  $tgeneroliterarioModel
     * @return \Illuminate\Http\Response
     */
    public function edit($idgeneroliterario) {
        $generoliterario = TgeneroliterarioModel::where('idgeneroliterario', $idgeneroliterario)
                ->first();
        return view('generoliterario.generoliterarioEditar', compact('generoliterario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TgeneroliterarioModel  $tgeneroliterarioModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $generoliterario = TgeneroliterarioModel::find($request->idgeneroliterario);
        $generoliterario->nome = $request->nome;
        $generoliterario->save();
        $messagem = 'Gênero literário "' . $request->nome . '" editado com sucesso.';
        return redirect('generoliterarioHome')
                        ->with('messagemGeneroliterario', $messagem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TgeneroliterarioModel  $tgeneroliterarioModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($idgeneroliterario) {
        $generoliterario = TgeneroliterarioModel::findOrFail($idgeneroliterario);
        $generoliterario->delete();
        $messagem = 'Gênero literário "' . $generoliterario->nome . '" apagado com sucesso.';
        return redirect('generoliterarioHome')
                        ->with('messagemGeneroliterario', $messagem);
    }

}
