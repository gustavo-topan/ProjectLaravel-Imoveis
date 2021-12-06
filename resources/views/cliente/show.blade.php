@extends('shared.base')
@section('content')
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Detalhes do Cliente</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Sobre o Cliente</h4>
                    <p>Nome: {{$cliente->nome}}</p>
                    <p>Email: {{$cliente->email}}</p>
                    <p>Telefone: {{$cliente->telefone}}</p>
                    <p>CPF: {{$cliente->cpf}}</p>
                    <hr>
                    <h4>Endereço</h4>
                    <p>Cidade: {{$cliente->cidadeEndereco}}</p>
                    <p>Estado: {{$cliente->estadoEndereco}}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
@endsection