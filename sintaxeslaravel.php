<?php
	Utilizar no cmd php artisan serve para iniciar o localhost

	//Controler localizado em app/http/controller
	/*<?php */namespace PastaMatriz\Http\Controllers;
	class NomeControlador extends Controller {
		/*Funções*/
		/*Para carregar views com variaveis*/return view('nomeview')->with('nomeVarNaView', $var);
	}
	//Utilizando o controller na rota
	Route::get('/nomeRota', 'NomeControlador@nomeMetodo');

	//Utilizando o DB
	use Illuminate\Support\Facades\DB; //É necessário carregar o componente através do namespace
	DB::funcaoSQL('query');
	dd(var); //Mostra as informações da variavel

	//Para ativar o Debug -> Modificar o arquivo env.example para env deixando os parametros corretos

	//Views localizadas em /resources/views

	//Para obter um parametro via URL
	use Request;
	Request::input('nome' , 'deault' //Default usado para quand o parametro não é passado);

	//Utilizando paramêtros na rota
	Route::get('/nome/{var}' , 'NomeControlador@nomeMetodo');
	//No controlador
	Request::route('nomeDoParametro');

	//Criando Templates
	1 - Salvar o Arquivo da forma: nome.blade.php
	2 - Incluir o HTML e no conteúdo utilizar @yield('nome2');
	3 - Utilizar @extends('nome'); no topo da página;
	4 - Utilizar @section ('nome2') no começo e @stop no fim de onde será o yield;
	5 - Modificar o nome das views para nome.blade.php

	//Exibição de variáveis utilizando o blade
	{{var or 'Texto' /*Caso var não tenha valor*/}} substitui a marcação do php
	@foreach
	@endforeach
	<p>class="{{ a >= 0 ? 'danger' : ''}}"</p>