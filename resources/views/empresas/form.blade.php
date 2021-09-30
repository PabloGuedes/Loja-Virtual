@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><a href="{{ url('empresas') }}">Voltar</a></center>
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
                            <form action="{{ url('empresas/update') }}/{{ $empresa->id }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="imagem">Imagem:</label>
                                    </br>
                                    <input type="file" name="imagem" id="imagem" value="{{ $empresa->imagem }}">
                                </div>

                                <div class="form-group">
                                    <label for="telefone">Telefone:</label>
                                    <input type="text" name="telefone" class="form-control" id="telefone"
                                        value="{{ $empresa->telefone }}">
                                </div>

                                <div class="form-group">
                                    <label for="endereco">Endereço:</label>
                                    <input type="text" name="endereco" class="form-control" id="endereco"
                                        value="{{ $empresa->endereco }}">
                                </div>

                                <div class="form-group">
                                    <label for="site">Site:</label>
                                    <input type="text" name="site" class="form-control" id="site"
                                        value="{{ $empresa->site }}">
                                </div>

                                <div class="form-group">
                                    <label for="responsavel">Responsável:</label>
                                    <input type="text" name="responsavel" class="form-control" id="responsavel"
                                        value="{{ $empresa->responsavel }}">
                                </div>

                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" name="nome" class="form-control" id="nome"
                                        value="{{ $empresa->nome }}">
                                </div>

                                <center><button type="submit" class="btn btn-primary">Atualizar</button></center>
                            </form>
                        @else
                            <center>
                                <h5>Cadastro de Empresas</h5>
                            </center>
                            <form action="{{ url('empresas/add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="imagem">Imagem:</label>
                                    </br>
                                    <input type="file" name="imagem" id="imagem">
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone:</label>
                                    <input type="text" name="telefone" class="form-control" id="telefone">
                                </div>

                                <div class="form-group">
                                    <label for="endereco">Endereço:</label>
                                    <input type="text" name="endereco" class="form-control" id="endereco">
                                </div>

                                <div class="form-group">
                                    <label for="site">Site:</label>
                                    <input type="text" name="site" class="form-control" id="site">
                                </div>

                                <div class="form-group">
                                    <label for="responsavel">Responsável:</label>
                                    <input type="text" name="responsavel" class="form-control" id="responsavel">
                                </div>

                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" name="nome" class="form-control" id="nome">
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
