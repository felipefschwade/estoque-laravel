@extends('layout/principal')
@section('conteudo')
	<div class="container">
		<form>
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
				<label for="descricao">Descrição</label>
				<textarea class="form-control" id="descricao" name="descricao"></textarea>
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Cadastrar">
			</div>
		</form>
	</div>	
@stop