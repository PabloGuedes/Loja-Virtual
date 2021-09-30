<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evolucoes;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class EvolucoesController extends Controller
{
    public function index(){
        $evolucoes = Evolucoes::get();
        return view('evolucoes.list', ['evolucoes' => $evolucoes]);
    }

    public function new(){
        return view('evolucoes.form');
    }

    public function add(Request $request){
        $evolucao = new Evolucoes;
        $evolucao = $evolucao->create($request->all());
        return FacadesRedirect::to('/evolucoes');
    }

    public function edit( $id ){
        $evolucao = Evolucoes::findOrFail($id);
        return view('evolucoes.form', ['evolucao' => $evolucao]);
    }

    public function update($id, Request $request){
        $evolucao = Evolucoes::findOrFail($id);
        $evolucao->update($request->all());
        return FacadesRedirect::to('/evolucoes');
    }

    public function delete($id){
        $evolucao = Evolucoes::findOrFail($id);
        $evolucao->delete();
        return FacadesRedirect::to('/evolucoes');
    }
}
