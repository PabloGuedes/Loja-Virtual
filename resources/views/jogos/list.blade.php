@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><a href="{{ url('home') }}">Voltar</a></center>
                        </br>
                        <center><a href="{{ url('jogos/new') }}">Novo Jogo</a></center>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <center>
                            <h5>Lista de Jogos</h5>
                        </center>
                        </br>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Responsável</th>
                                    <th scope="col">Caminho</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jogos as $j)
                                    <tr>
                                        <th scope="row">{{ $j->id }}</th>
                                        <td>{{ $j->responsavel }}</td>
                                        <td>{{ $j->caminho }}</td>
                                        <td>{{ $j->descricao }}</td>
                                        <td>{{ $j->status }}</td>
                                        <td>
                                            <a href="jogos/{{ $j->id }}/edit" class="btn btn-info">Editar</a>
                                        </td>
                                        <td>
                                            <form action="jogos/delete/{{ $j->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">Deletar</button>
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
