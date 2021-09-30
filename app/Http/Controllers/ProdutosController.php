<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produtos::get();
        return view('produtos.list', ['produtos' => $produtos]);
    }

    public function new(){
        return view('produtos.form');
    }

    public function add(Request $request){
        $produto = new Produtos();
        $produto = $produto->create($request->all());
        return FacadesRedirect::to('/produtos');
    }

    public function edit( $id ){
        $produto = Produtos::findOrFail($id);
        return view('produtos.form', ['produto' => $produto]);
    }

    public function update($id, Request $request){
        $produto = Produtos::findOrFail($id);
        $produto->update($request->all());
        return FacadesRedirect::to('/produtos');
    }

    public function delete($id){
        $produto = Produtos::findOrFail($id);
        $produto->delete();
        return FacadesRedirect::to('/produtos');
    }
}
