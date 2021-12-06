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
        <div class="panel-heading"><h3>Edite o Cliente</h3></div>
        <div class="panel-body">
            <form method="post" action="{{route ('cliente.update', $cliente->id)}}">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
                <h4>Dados do Cliente</h4>
                <hr>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" placeholder="Nome" name="nome" required value="{{$cliente->nome}}">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" placeholder="Email" name="email" required value="{{$cliente->email}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" placeholder="Telefone" required name="telefone"
                                value="{{$cliente->telefone}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" placeholder="CPF" required name="cpf"
                            value="{{$cliente->cpf}}">
                        </div>
                    </div>
                    </div>
                    <h4>Endereço</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cidadeEndereco">Cidade</label>
                                <input type="text" class="form-control" placeholder="Cidade" required name="cidadeEndereco"
                                value="{{$cliente->cidadeEndereco}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="estadoEndereco">Estado</label>
                                <input type="text" class="form-control" placeholder="Estado" required name="estadoEndereco"
                                value="{{$cliente->estadoEndereco}}">
                            </div>
                        </div>
                    </div>
                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
@endsection