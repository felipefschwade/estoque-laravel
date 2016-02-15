@extends('layout/principal')
@section('conteudo')
	<h1>Controle de Estoque</h1>
	@if(empty($produtos))
		<div class="alert alert-danger">
			Você não possui nenhum produto cadastrado!
		</div>
	@else
		<table class="table">
			@foreach($produtos as $p)
				<tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}">
	            	<td><?=$p->nome?></td>
	            	<td><?=$p->descricao?></td>
	            	<td><?=$p->valor?></td>
	            	<td><?=$p->quantidade?></td>
	        		<td><a href="/produtos/mostra/<?=$p->id?>">
						  <span class="glyphicon glyphicon-search"></span>
						</a>
					</td>	
	            </tr>
		    @endforeach
	@endif
	@if(old('nome'))
	  <div class="alert alert-success">
	    <strong>Sucesso!</strong> 
	      O produto {{ old('nome') }} foi adicionado.
	  </div>
	@endif
@stop