@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><a href="{{ url('categorias') }}">Voltar</a></center>
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
                            <form action="{{ url('categorias/update') }}/{{ $categoria->id }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idCategoria">ID Categoria:</label>
                                    <input type="text" name="idCategoria" class="form-control" id="idCategoria"
                                        value="{{ $categoria->idCategoria }}">
                                </div>

                                <div class="form-group">
                                    <label for="descricao">Descrição:</label>
                                    <input type="text" name="descricao" class="form-control" id="descricao"
                                        value="{{ $categoria->descricao }}">
                                </div>

                                <center><button type="submit" class="btn btn-primary">Atualizar</button></center>
                            </form>
                        @else
                            <center>
                                <h5>Cadastro de Categorias</h5>
                            </center>
                            <form action="{{ url('categorias/add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idCategoria">ID Categoria:</label>
                                    <input type="text" name="idCategoria" class="form-control" id="idCategoria">
                                </div>

                                <div class="form-group">
                                    <label for="descricao">Descrição:</label>
                                    <input type="text" name="descricao" class="form-control" id="descricao">
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
