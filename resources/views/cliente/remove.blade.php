@extends('shared.base')
@section('content')
<div class="panel panel-default">
      <div class="panel-heading">Remover um Cliente</div>
		<div class="panel-body">
			<form method="post" action="{{route ('cliente.destroy', $cliente->id)}}">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}
				<div class="row">
					<div class="col-md-12">
						<h4>Tem certeza que deseja remover o Cliente</h4>
						<hr>
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
				<button type="submit" class="btn btn-danger">Remover</button>
				<a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
			</form>
		</div>
	</div>
</div>
@endsection