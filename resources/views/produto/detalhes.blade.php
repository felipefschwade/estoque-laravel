@extends('layout/principal')

@section('conteudo')
	<h1>Detalhes do Produto  {{$produto->nome}} </h1>
	<ul>
		<li>
			Valor:  {{$produto->valor}}
		</li>
		<li>
			Descrição:  {{$produto->descricao}}
		</li>
		<li>
			Quantidade em Estoque:  {{$produto->quantidade}}
		</li>
	</ul>
@stop