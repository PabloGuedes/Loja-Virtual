@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><a href="{{ url('home') }}">Voltar</a></center>
                        </br>
                        <center><a href="{{ url('evolucoes/new') }}">Nova Evolução</a></center>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <center>
                            <h5>Lista de Evoluções</h5>
                        </center>
                        </br>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Evolução</th>
                                    <th scope="col">Imagem Avatar</th>
                                    <th scope="col">Data e Hora da Evolução</th>
                                    <th scope="col">Avatar</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($evolucoes as $e)
                                    <tr>
                                        <th scope="row">{{ $e->id }}</th>
                                        <td>{{ $e->idEvolucao }}</td>
                                        <td>{{ $e->imagem_avatar }}</td>
                                        <td>{{ $e->dataHoraEvolucao }}</td>
                                        <td>{{ $e->avatar }}</td>
                                        <td>
                                            <a href="evolucoes/{{ $e->id }}/edit" class="btn btn-info">Editar</a>
                                        </td>
                                        <td>
                                            <form action="evolucoes/delete/{{ $e->id }}" method="post">
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
