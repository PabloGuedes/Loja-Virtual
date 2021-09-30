@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><a href="{{ url('home') }}">Voltar</a></center>
                        </br>
                        <center><a href="{{ url('categorias/new') }}">Nova Categoria</a></center>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <center>
                            <h5>Lista de Categorias</h5>
                        </center>
                        </br>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Categoria</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $c)
                                    <tr>
                                        <th scope="row">{{ $c->id }}</th>
                                        <td>{{ $c->idCategoria }}</td>
                                        <td>{{ $c->descricao }}</td>
                                        <td>
                                            <a href="categorias/{{ $c->id }}/edit" class="btn btn-info">Editar</a>
                                        </td>
                                        <td>
                                            <form action="categorias/delete/{{$c->id}}" method="post">
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
