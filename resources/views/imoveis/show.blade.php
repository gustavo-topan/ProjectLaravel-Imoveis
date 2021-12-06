@extends('index.base')
@section('content')
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Detalhes do Imóvel</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Sobre o Imóvel</h4>
                    <p>Descrição: {{$imovel->descricao}}</p>
                    <p>Preço: R$ {{number_format($imovel->preco, 2, ',', '.')}}</p>
                    <p>Quantidade de Quartos: {{$imovel->qtdQuartos}}</p>
                    <p>Tipo: {{$imovel->tipo}}</p>
                    <p>Finalidade: {{$imovel->finalidade}}</p>
                    <hr>
                    <h4>Endereço</h4>
                    <p>Bairro: {{$imovel->bairroEndereco}}</p>
                    <p>Número: {{$imovel->numeroEndereco}}</p>
                    <p>Cidade: {{$imovel->cidadeEndereco}}</p>
                    <p>Estado: {{$imovel->estadoEndereco}}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
@endsection