@extends('shared.base')

@section('content')
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif  
    <div class="panel panel-default">

        <div class="panel-heading"><h3>Cadastre o Cliente</h3></div>
        <div class="panel-body">

    <form method="post" action="{{route ('cliente.store')}}">
        {{ csrf_field() }}
        <h4>Dados do Cliente</h4>
        <hr>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" placeholder="Nome" name="nome" required>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" placeholder="Telefone" required name="telefone">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" placeholder="CPF" required name="cpf">
                </div>
            </div>
        </div>

        <h4>Endereço</h4>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cidadeEndereco">Cidade</label>
                    <input type="text" class="form-control" placeholder="Cidade" required name="cidadeEndereco">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="estadoEndereco">Estado</label>
                    <input type="text" class="form-control" placeholder="Estado" required name="estadoEndereco">
                </div>
            </div>
        </div>

        <h4>Imóveis</h4>
        <hr>
        <div class="form-group">
            <label for="marca_id">Selecione o imóvel deste cliente</label>
            <select class="form-control" name="marca_id" required>
            @foreach($imoveis as $imovel)            
                <option value="{{$imovel->id}}">{{$imovel->nome}}</option>            
            @endforeach
            </select>
        </div>  
        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
        </div>
    </div>

@endsection