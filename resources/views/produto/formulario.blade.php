@extends('layout/principal')
@foreach($errors->all() as $error)
	<li class="text-danger">{{$error}}</li>
@endforeach
@section('conteudo')
	<div class="container">
		<form action="/produtos/adiciona" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<label for="nome">Nome</label>
				<input class="form-control" id="nome" name="nome">
			</div>
			<div class="form-group">
				<label for="valor">Valor</label>
				<input class="form-control" id="valor" name="valor">
			</div>
			<div class="form-group">
				<label for="quantidade">Quantidade</label>
				<input class="form-control" id="quantidade" name="quantidade">
			</div>
			<div class="form-group">
			    <label>Tamanho</label>
			    <input name="tamanho" class="form-control" /> 
			</div>
			<div class="form-group">
			    <label>Categoria</label>
			    <select name="categoria_id" class="form-control">
			    	@foreach($categorias as $categoria)
			    		<option value="{{$categoria->id}}">{{$categoria->nome}}</option>
			    	@endforeach
			    </select> 
			</div>
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<textarea class="form-control" id="descricao" name="descricao"></textarea>
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Cadastrar">
			</div>
		</form>
	</div>	
@stop