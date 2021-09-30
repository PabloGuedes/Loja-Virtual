<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class CategoriasController extends Controller
{
    public function index(){
        $categorias = Categoria::get();
        return view('categorias.list', ['categorias' => $categorias]);
    }

    public function new(){
        return view('categorias.form');
    }

    public function add(Request $request){
        $categoria = new Categoria;
        $categoria = $categoria->create($request->all());
        return FacadesRedirect::to('/categorias');
    }

    public function edit( $id ){
        $categoria = Categoria::findOrFail($id);
        return view('categorias.form', ['categoria' => $categoria]);
    }

    public function update($id, Request $request){
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
        return FacadesRedirect::to('/categorias');
    }

    public function delete($id){
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return FacadesRedirect::to('/categorias');
    }
}
