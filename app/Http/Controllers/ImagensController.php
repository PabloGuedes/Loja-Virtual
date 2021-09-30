<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagens;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class ImagensController extends Controller
{
    public function index(){
        $imagens = Imagens::get();
        return view('imagens.list', ['imagens' => $imagens]);
    }

    public function new(){
        return view('imagens.form');
    }

    public function add(Request $request){
        $imagem = new Imagens;
        $imagem = $imagem->create($request->all());
        return FacadesRedirect::to('/imagens');
    }

    public function edit( $id ){
        $imagem = Imagens::findOrFail($id);
        return view('imagens.form', ['imagem' => $imagem]);
    }

    public function update($id, Request $request){
        $imagem = Imagens::findOrFail($id);
        $imagem->update($request->all());
        return FacadesRedirect::to('/imagens');
    }

    public function delete($id){
        $imagem = Imagens::findOrFail($id);
        $imagem->delete();
        return FacadesRedirect::to('/imagens');
    }
}
