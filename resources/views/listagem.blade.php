@extends('principal')
@section('conteudo')
	<h1>Controle de Estoque</h1>
	<table class="table">
		@foreach($produtos as $p)
			<tr>
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
@stop