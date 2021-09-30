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
                <div class="card  bg-card ">
                    <div class="card-header">
                        <center><a href="{{ url('compras') }}">Voltar</a></center>
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
                            <form action="{{ url('compras/update') }}/{{ $compra->id }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idCompra">ID Compra:</label>
                                    <input type="text" name="idCompra" class="form-control" id="idCompra"
                                        value="{{ $compra->idCompra }}">
                                </div>

                                <div class="form-group">
                                    <label for="dataHoraCompra">Data e Hora da Compra:</label>
                                    <input type="text" name="dataHoraCompra" class="form-control" id="dataHoraCompra"
                                        value="{{ $compra->dataHoraCompra }}">
                                </div>

                                <div class="form-group">
                                    <label for="descricao">Descrição:</label>
                                    <input type="text" name="descricao" class="form-control" id="descricao"
                                        value="{{ $compra->descricao }}">
                                </div>

                                <div class="form-group">
                                    <label for="formaDePagamento">Forma de Pagamento:</label>
                                    <input type="text" name="formaDePagamento" class="form-control" id="formaDePagamento"
                                        value="{{ $compra->formaDePagamento }}">
                                </div>

                                <center><button type="submit" class="btn btn-primary">Atualizar</button></center>
                            </form>
                        @else
                            <center>
                                <h5>Cadastro de Compras</h5>
                            </center>
                            <form action="{{ url('compras/add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="idCompra">ID Compra:</label>
                                    <input type="text" name="idCompra" class="form-control" id="idCompra">
                                </div>

                                <div class="form-group">
                                    <label for="dataHoraCompra">Data e Hora da Compra:</label>
                                    <input type="text" name="dataHoraCompra" class="form-control" id="dataHoraCompra">
                                </div>

                                <div class="form-group">
                                    <label for="descricao">Descrição:</label>
                                    <input type="text" name="descricao" class="form-control" id="descricao">
                                </div>

                                <div class="form-group">
                                    <label for="formaDePagamento">Forma de Pagamento:</label>
                                    <input type="text" name="formaDePagamento" class="form-control" id="formaDePagamento">
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
