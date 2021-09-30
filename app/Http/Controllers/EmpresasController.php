<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class EmpresasController extends Controller
{
    public function index(){
        $empresas = Empresa::get();
        return view('empresas.list', ['empresas' => $empresas]);
    }

    public function new(){
        return view('empresas.form');
    }

    public function add(Request $request){
        $empresa = new Empresa;
        $empresa = $empresa->create($request->all());
        return FacadesRedirect::to('/empresas');
    }

    public function edit( $id ){
        $empresa = Empresa::findOrFail($id);
        return view('empresas.form', ['empresa' => $empresa]);
    }

    public function update($id, Request $request){
        $empresa = Empresa::findOrFail($id);
        $empresa->update($request->all());
        return FacadesRedirect::to('/empresas');
    }

    public function delete($id){
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();
        return FacadesRedirect::to('/empresas');
    }
}
