@extends('layouts.app')

@section('content')
    <style>
        .bg-card {
            background: rgba(0, 0, 0, 0.8);
            color: rgb(233, 233, 233);
        }

        table,
        thead,
        tbody,
        td,
        th {

            border: 1px solid rgb(233, 233, 233);
        }

        th,
        td {
            color: rgb(233, 233, 233);
        }

        .btn-edit {
            color: rgb(233, 233, 233);
            background: rgba(24, 12, 133, 0.8);
        }

        .btn-delete {
            color: rgb(233, 233, 233);
            background: rgba(109, 13, 13, 0.8);
        }

    </style>
    <div class="container" style="margin-left: 3%">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card  bg-card" style="width: 130%;">
                    <div class="card-header">
                        <center><a href="{{ url('home') }}">Voltar</a></center>
                        </br>
                        <center><a href="{{ url('empresas/new') }}">Nova Empresa</a></center>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <center>
                            <h5>Lista de Empresas</h5>
                        </center>
                        </br>
                        <table class="table table-bordered" style="position: relative">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">Site</th>
                                    <th scope="col">Responsável</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empresas as $e)
                                    <tr>
                                        <th scope="row">{{ $e->id }}</th>
                                        <td>{{ $e->imagem }}</td>
                                        <td>{{ $e->telefone }}</td>
                                        <td>{{ $e->endereco }}</td>
                                        <td>{{ $e->site }}</td>
                                        <td>{{ $e->responsavel }}</td>
                                        <td>{{ $e->nome }}</td>
                                        <td>
                                            <a href="empresas/{{ $e->id }}/edit" class="btn btn-edit">Editar</a>
                                        </td>
                                        <td>
                                            <form action="empresas/delete/{{ $e->id }}" method="post">
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
