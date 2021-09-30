@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><h5>Painel de Controle</h5></center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center><h5>Bem-vindo!</h5></center>
                    <p>Escolha uma das listas abaixo para adicionar um novo item, editar um item existente ou excluí-lo.</p>
                    <a href="{{ url('categorias') }}">Lista de Categorias</a>
                        </br></br>
                    <a href="{{ url('compras') }}">Lista de Compras</a>
                        </br></br>
                    <a href="{{ url('empresas') }}">Lista de Empresas</a>
                        </br></br>
                    <a href="{{ url('evolucoes') }}">Lista de Evoluções</a>
                        </br></br>
                    <a href="{{ url('imagens') }}">Lista de Imagens</a>
                        </br></br>
                    <a href="{{ url('jogos') }}">Lista de Jogos</a>
                        </br></br>
                    <a href="{{ url('produtos') }}">Lista de Produtos</a>
                        </br></br>
                    <a href="{{ url('usuarios') }}">Lista de Usuários</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
