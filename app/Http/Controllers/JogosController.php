<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogos;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class JogosController extends Controller
{
    public function index(){
        $jogos = Jogos::get();
        return view('jogos.list', ['jogos' => $jogos]);
    }

    public function new(){
        return view('jogos.form');
    }

    public function add(Request $request){
        $jogo = new Jogos;
        $jogo = $jogo->create($request->all());
        return FacadesRedirect::to('/jogos');
    }

    public function edit( $id ){
        $jogo = Jogos::findOrFail($id);
        return view('jogos.form', ['jogo' => $jogo]);
    }

    public function update($id, Request $request){
        $jogo = Jogos::findOrFail($id);
        $jogo->update($request->all());
        return FacadesRedirect::to('/jogos');
    }

    public function delete($id){
        $jogo = Jogos::findOrFail($id);
        $jogo->delete();
        return FacadesRedirect::to('/jogos');
    }
}
