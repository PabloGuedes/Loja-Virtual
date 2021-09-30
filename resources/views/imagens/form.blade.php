@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><a href="{{ url('imagens') }}">Voltar</a></center>
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
                            <form action="{{ url('imagens/update') }}/{{ $imagem->id }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idImagem">ID Imagem:</label>
                                    <input type="text" name="idImagem" class="form-control" id="idImagem"
                                        value="{{ $imagem->idImagem }}">
                                </div>

                                <div class="form-group">
                                    <label for="imagem">Imagem:</label>
                                    </br>
                                    <input type="file" name="imagem" id="imagem"
                                        value="{{ $imagem->imagem }}">
                                </div>

                                <center><button type="submit" class="btn btn-primary">Atualizar</button></center>
                            </form>
                        @else
                            <center>
                                <h5>Cadastro de Imagens</h5>
                            </center>
                            <form action="{{ url('imagens/add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idImagem">ID Imagem:</label>
                                    <input type="text" name="idImagem" class="form-control" id="idImagem">
                                </div>

                                <div class="form-group">
                                    <label for="imagem">Imagem:</label>
                                    </br>
                                    <input type="file" name="imagem" id="imagem">
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
