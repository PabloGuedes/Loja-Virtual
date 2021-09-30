<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class ComprasController extends Controller
{
    public function index(){
        $compras = Compra::get();
        return view('compras.list', ['compras' => $compras]);
    }

    public function new(){
        return view('compras.form');
    }

    public function add(Request $request){
        $compra = new Compra;
        $compra = $compra->create($request->all());
        return FacadesRedirect::to('/compras');
    }

    public function edit( $id ){
        $compra = Compra::findOrFail($id);
        return view('compras.form', ['compra' => $compra]);
    }

    public function update($id, Request $request){
        $compra = Compra::findOrFail($id);
        $compra->update($request->all());
        return FacadesRedirect::to('/compras');
    }

    public function delete($id){
        $compra = Compra::findOrFail($id);
        $compra->delete();
        return FacadesRedirect::to('/compras');
    }
}
