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
                <div class="card  bg-card" style="width: 120%">
                    <div class="card-header">
                        <center><a href="{{ url('home') }}">Voltar</a></center>
                        </br>
                        <center><a href="{{ url('produtos/new') }}">Novo Produto</a></center>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <center>
                            <h5>Lista de Produtos</h5>
                        </center>
                        </br>
                        <table class="table table-bordered" style="position: relative">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Categoria</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Data de Vencimento</th>
                                    <th scope="col">Moedas</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $p)
                                    <tr>
                                        <th scope="row">{{ $p->id }}</th>
                                        <td>{{ $p->idCategoria }}</td>
                                        <td>{{ $p->descricao }}</td>
                                        <td>{{ $p->data_vencimento }}</td>
                                        <td>{{ $p->moedas }}</td>
                                        <td>{{ $p->quantidade }}</td>
                                        <td>{{ $p->preco }}</td>
                                        <td>
                                            <a href="produtos/{{ $p->id }}/edit" class="btn btn-edit">Editar</a>
                                        </td>
                                        <td>
                                            <form action="produtos/delete/{{ $p->id }}" method="post">
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
