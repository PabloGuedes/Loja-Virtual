@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><a href="{{ url('usuarios') }}">Voltar</a></center>
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
                            <form action="{{ url('usuarios/update') }}/{{ $usuario->id }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idUser">ID do Usuário:</label>
                                    <input type="text" name="idUser" class="form-control" id="idUser"
                                        value="{{ $usuario->idUser }}">
                                </div>

                                <div class="form-group">
                                    <label for="login">Login:</label>
                                    <input type="text" name="login" class="form-control" id="login"
                                        value="{{ $usuario->login }}">
                                </div>

                                <div class="form-group">
                                    <label for="senha">Senha:</label>
                                    <input type="text" name="senha" class="form-control" id="senha"
                                        value="{{ $usuario->senha }}">
                                </div>

                                <div class="form-group">
                                    <label for="ultima_atualizacao">Última atualização:</label>
                                    <input type="text" name="ultima_atualizacao" class="form-control"
                                        id="ultima_atualizacao" value="{{ $usuario->ultima_atualizacao }}">
                                </div>

                                <div class="form-group">
                                    <label for="saldo_moedas">Saldo de Moedas:</label>
                                    <input type="text" name="saldo_moedas" class="form-control" id="saldo_moedas"
                                        value="{{ $usuario->saldo_moedas }}">
                                </div>

                                <div class="form-group">
                                    <label for="saldo_pontos">Saldo de Pontos:</label>
                                    <input type="text" name="saldo_pontos" class="form-control" id="saldo_pontos"
                                        value="{{ $usuario->saldo_pontos }}">
                                </div>

                                <center><button type="submit" class="btn btn-primary">Atualizar</button></center>
                            </form>
                        @else
                            <center>
                                <h5>Cadastro de Usuários</h5>
                            </center>
                            <form action="{{ url('usuarios/add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idUser">ID do Usuário:</label>
                                    <input type="text" name="idUser" class="form-control" id="idUser">
                                </div>

                                <div class="form-group">
                                    <label for="login">Login:</label>
                                    <input type="text" name="login" class="form-control" id="login">
                                </div>

                                <div class="form-group">
                                    <label for="senha">Senha:</label>
                                    <input type="text" name="senha" class="form-control" id="senha">
                                </div>

                                <div class="form-group">
                                    <label for="ultima_atualizacao">Última atualização:</label>
                                    <input type="text" name="ultima_atualizacao" class="form-control"
                                        id="ultima_atualizacao">
                                </div>

                                <div class="form-group">
                                    <label for="saldo_moedas">Saldo de Moedas:</label>
                                    <input type="text" name="saldo_moedas" class="form-control" id="saldo_moedas">
                                </div>

                                <div class="form-group">
                                    <label for="saldo_pontos">Saldo de Pontos:</label>
                                    <input type="text" name="saldo_pontos" class="form-control" id="saldo_pontos">
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
