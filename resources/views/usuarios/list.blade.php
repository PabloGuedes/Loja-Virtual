@extends('layouts.app')

@section('content')
<style>
    .bg-card {
        background: rgba(0,0,0,0.8);
        color: rgb(233, 233, 233);
    }
table,thead,tbody,td,th{

    border:  1px solid  rgb(233, 233, 233);
}
        th,td{
            color: rgb(233, 233, 233);
        }
        .btn-edit  {
            color: rgb(233, 233, 233);
        background: rgba(24, 12, 133, 0.8);
        }
        .btn-delete {
            color: rgb(233, 233, 233);
        background: rgba(109, 13, 13, 0.8);
        }
 </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-card" style="width: 110%">
                    <div class="card-header">
                        <center><a href="{{ url('home') }}">Voltar</a></center>
                        </br>
                        <center><a href="{{ url('usuarios/new') }}">Novo Usuário</a></center>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <center>
                            <h5>Lista de Usuários</h5>
                        </center>
                        </br>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID do Usuário</th>
                                    <th scope="col">Login</th>
                                    <th scope="col">Senha</th>
                                    <th scope="col">Última atualização</th>
                                    <th scope="col">Saldo de moedas</th>
                                    <th scope="col">Saldo de pontos</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $u)
                                    <tr>
                                        <th scope="row">{{ $u->id }}</th>
                                        <td>{{ $u->idUser }}</td>
                                        <td>{{ $u->login }}</td>
                                        <td>{{ $u->senha }}</td>
                                        <td>{{ $u->ultima_atualizacao }}</td>
                                        <td>{{ $u->saldo_moedas }}</td>
                                        <td>{{ $u->saldo_pontos }}</td>
                                        <td>
                                            <a href="usuarios/{{ $u->id }}/edit" class="btn btn-edit">Editar</a>
                                        </td>
                                        <td>
                                            <form action="usuarios/delete/{{ $u->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-delete">Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
