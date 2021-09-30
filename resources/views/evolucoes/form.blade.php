@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><a href="{{ url('evolucoes') }}">Voltar</a></center>
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
                            <form action="{{ url('evolucoes/update') }}/{{ $evolucao->id }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idEvolucao">ID Evolução:</label>
                                    <input type="text" name="idEvolucao" class="form-control" id="idEvolucao"
                                        value="{{ $evolucao->idEvolucao }}">
                                </div>

                                <div class="form-group">
                                    <label for="imagem_avatar">Imagem do avatar:</label>
                                    </br>
                                    <input type="file" name="imagem_avatar" id="imagem_avatar"
                                        value="{{ $evolucao->imagem_avatar }}">
                                </div>

                                <div class="form-group">
                                    <label for="dataHoraEvolucao">Data e Hora da Evolução:</label>
                                    <input type="text" name="dataHoraEvolucao" class="form-control" id="dataHoraEvolucao"
                                        value="{{ $evolucao->dataHoraEvolucao }}">
                                </div>

                                <div class="form-group">
                                    <label for="avatar">Avatar:</label>
                                    <input type="text" name="avatar" class="form-control" id="avatar"
                                        value="{{ $evolucao->avatar }}">
                                </div>

                                <center><button type="submit" class="btn btn-primary">Atualizar</button></center>
                            </form>
                        @else
                            <center>
                                <h5>Cadastro de Evoluções</h5>
                            </center>
                            <form action="{{ url('evolucoes/add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idEvolucao">ID Evolução:</label>
                                    <input type="text" name="idEvolucao" class="form-control" id="idEvolucao">
                                </div>

                                <div class="form-group">
                                    <label for="imagem_avatar">Imagem do avatar:</label>
                                    </br>
                                    <input type="file" name="imagem_avatar" id="imagem_avatar">
                                </div>

                                <div class="form-group">
                                    <label for="dataHoraEvolucao">Data e Hora da Evolução:</label>
                                    <input type="text" name="dataHoraEvolucao" class="form-control" id="dataHoraEvolucao">
                                </div>

                                <div class="form-group">
                                    <label for="avatar">Avatar:</label>
                                    <input type="text" name="avatar" class="form-control" id="avatar">
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
