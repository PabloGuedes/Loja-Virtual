@extends('layouts.app')

@section('content')
<style>
    .bg-card {
        background: rgba(0,0,0,0.8);
    color: rgb(223, 223, 223);
    }
 </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-card">
                    <div class="card-header">
                        <center><a href="{{ url('produtos') }}">Voltar</a></center>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (Request::is('*/edit'))
                            <center>
                                <h5>Selecione e edite o campo desejado</h5>
                            </center>
                            <form action="{{ url('produtos/update') }}/{{ $produto->id }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idCategoria">ID Categoria:</label>
                                    <input type="text" name="idCategoria" class="form-control" id="idCategoria"
                                        value="{{ $produto->idCategoria }}">
                                </div>

                                <div class="form-group">
                                    <label for="descricao">Descrição:</label>
                                    <input type="text" name="descricao" class="form-control" id="descricao"
                                    value="{{ $produto->descricao }}">
                                </div>

                                <div class="form-group">
                                    <label for="data_vencimento">Data de Vencimento:</label>
                                    <input type="text" name="data_vencimento" class="form-control" id="data_vencimento"
                                        value="{{ $produto->data_vencimento }}">
                                </div>

                                <div class="form-group">
                                    <label for="moedas">Moedas:</label>
                                    <input type="text" name="moedas" class="form-control" id="moedas"
                                        value="{{ $produto->moedas }}">
                                </div>

                                <div class="form-group">
                                    <label for="quantidade">Quantidade:</label>
                                    <input type="text" name="quantidade" class="form-control" id="quantidade"
                                        value="{{ $produto->quantidade }}">
                                </div>

                                <div class="form-group">
                                    <label for="preco">Preço:</label>
                                    <input type="text" name="preco" class="form-control" id="preco"
                                        value="{{ $produto->preco }}">
                                </div>

                                <center><button type="submit" class="btn btn-primary">Atualizar</button></center>
                            </form>
                        @else
                            <center>
                                <h5>Cadastro de Produtos</h5>
                            </center>
                            <form action="{{ url('produtos/add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idCategoria">ID Categoria:</label>
                                    <input type="text" name="idCategoria" class="form-control" id="idCategoria">
                                </div>

                                <div class="form-group">
                                    <label for="descricao">Descrição:</label>
                                    <input type="text" name="descricao" class="form-control" id="descricao">
                                </div>

                                <div class="form-group">
                                    <label for="data_vencimento">Data de Vencimento:</label>
                                    <input type="text" name="data_vencimento" class="form-control" id="data_vencimento">
                                </div>

                                <div class="form-group">
                                    <label for="moedas">Moedas:</label>
                                    <input type="text" name="moedas" class="form-control" id="moedas">
                                </div>

                                <div class="form-group">
                                    <label for="quantidade">Quantidade:</label>
                                    <input type="text" name="quantidade" class="form-control" id="quantidade">
                                </div>

                                <div class="form-group">
                                    <label for="preco">Preço:</label>
                                    <input type="text" name="preco" class="form-control" id="preco">
                                </div>

                                <center><button type="submit" class="btn btn-primary">Cadastrar</button></center>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
