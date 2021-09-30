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
                        <center><a href="{{ url('jogos') }}">Voltar</a></center>
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
                            <form action="{{ url('jogos/update') }}/{{ $jogo->id }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="responsavel">Responsável:</label>
                                    <input type="text" name="responsavel" class="form-control" id="responsavel"
                                        value="{{ $jogo->responsavel }}">
                                </div>

                                <div class="form-group">
                                    <label for="caminho">Caminho:</label>
                                    <input type="text" name="caminho" class="form-control" id="caminho"
                                        value="{{ $jogo->caminho }}">
                                </div>

                                <div class="form-group">
                                    <label for="descricao">Descrição:</label>
                                    <input type="text" name="descricao" class="form-control" id="descricao"
                                        value="{{ $jogo->descricao }}">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <input type="text" name="status" class="form-control" id="status"
                                        value="{{ $jogo->status }}">
                                </div>

                                <center><button type="submit" class="btn btn-primary">Atualizar</button></center>
                            </form>
                        @else
                            <center>
                                <h5>Cadastro de Jogos</h5>
                            </center>
                            <form action="{{ url('jogos/add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="responsavel">Responsável:</label>
                                    <input type="text" name="responsavel" class="form-control" id="responsavel">
                                </div>

                                <div class="form-group">
                                    <label for="caminho">Caminho:</label>
                                    <input type="text" name="caminho" class="form-control" id="caminho">
                                </div>

                                <div class="form-group">
                                    <label for="descricao">Descrição:</label>
                                    <input type="text" name="descricao" class="form-control" id="descricao">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <input type="text" name="status" class="form-control" id="status">
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
