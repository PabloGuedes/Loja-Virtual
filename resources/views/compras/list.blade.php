@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><a href="{{ url('home') }}">Voltar</a></center>
                        </br>
                        <center><a href="{{ url('compras/new') }}">Nova Compra</a></center>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <center>
                            <h5>Lista de Compras</h5>
                        </center>
                        </br>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Compra</th>
                                    <th scope="col">Data e Hora da Compra</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Forma de Pagamento</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($compras as $c)
                                    <tr>
                                        <th scope="row">{{ $c->id }}</th>
                                        <td>{{ $c->idCompra }}</td>
                                        <td>{{ $c->dataHoraCompra }}</td>
                                        <td>{{ $c->descricao }}</td>
                                        <td>{{ $c->formaDePagamento }}</td>
                                        <td>
                                            <a href="compras/{{ $c->id }}/edit" class="btn btn-info">Editar</a>
                                        </td>
                                        <td>
                                            <form action="compras/delete/{{ $c->id }}" method="post">
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
