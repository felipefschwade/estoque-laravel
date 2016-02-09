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