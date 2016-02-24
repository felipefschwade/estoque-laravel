<?php
	Utilizar no cmd php artisan serve para iniciar o localhost

	//Controler localizado em app/http/controller
	/*<?php */namespace PastaMatriz\Http\Controllers;
	class NomeControlador extends Controller {
		/*Funções*/
		/*Para carregar views com variaveis*/return view('nomeview')->with('nomeVarNaView', $var);
	}
	//Para criar um controller no arstisan
	php artisan make:controller nome --plain

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
	Request::input('nome' , 'default'); //Default usado para quand o parametro não é passado);
	//Para Id's informados na rota é possivel utilizar:
	public function FunctionName($id) {
		# code...
	}

	//Para metodos post é necessário incluir a linha que impede ataques de csrf:
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	//Modificar o metodo da rota
	Route::post('nome/metodo' , 'NomeControlador@nomeMetodo')

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

	
	//Para encaminhar rotas 
	return redirect('rota/rota');
	//Ou
	redirect()->action('NomeControlador@metodo')->withInput(Request::only('nome'));

	//Para utilizar o DB
	use Illuminate\Support\Facades\DB;
	DB::select('select * from produtos where id = ?', [arraycontendo os valores que irão no lugar do ?]);
	DB::insert('insert into tabela (colum, colum, colum) values (?,?,?)', array(arraycontendo os valores que irão no lugar do ?);
	//Para utilizar o Model
	php artisan make:model nome -m(para criar a migração);
	//Dentro do controler
	use estoque\nomeModel;
	//Para Selecionar todos
	nomeModel::all();
	//Para selecionar um especifico por ID
	nomeModel::find($id);
	//Para Salvar um dado no DB
	$var = new nomeModel();
	$var->instancia = ;
	$var->instancia = ;
	$var->instancia = ;
	$var->save();
	//Facilitando a inserção no DB
	1- Utilizar o Mass Assigment
	$params = Request::all();
	$var = new nomeModel($params);
	$var->save();
	2 - Modificar o Model
	protected fillable = array('nomecoluna', 'nomecoluna', 'nomecoluna');
	3 - nomeModel::create($params/Request::all());
	//CAso não deseje utilizar a data de criação e data de alteração
	1 - Atribuir public $timestamps = false na classe;
	//Caso o nome da tabela não seja o nome da classe no plural
	Atribuir protected $table = 'nometabela'; 

	//Para remover Produtos
	$id = Request::route('nome');
	$produto = nomeModel::find($id);
	$produto->delete();
	redirect('/local')
	//Para criar chaves estrangeiras
	class Model extends Model{
		public function nomeTabela(){
			return $this->belongsTo('nomeprojeto/classe');
		}
	}
	class OutroModel extends Model{
		public function nomeTabela(){
			return $this->hasMany('nomeprojeto/classe');
		}
	}




	//Para enviar parametros de requisições anteriores
	1 - Enviar o parametro: return redirect('rota/rota')->withInput(Request::except('nome') ou Request::only('nome') ou nada para todos parametros);
	2 - Resgatar na página desejada através de: old('nomevar');

	//Para gerar uma key de session automatica
	php artisan key:generate
	APP_KEY=chavegerada //no arquivo .env
	//Para criar uma migração
	php artisan make:migration nome_migracao
	//Para rodar
	php artisan migrate
	//Para RollBack
	php artisan migrate:rollback

	//Para realizar a validação de formulários simples
	use Validator;
	$var = Validator::make(
			['nomecampo' => Request::input('nomecampo')],
			['nomecampo' => 'regras|required|min:numerominimo']
		);
	if ($var->fails()){
		$var->messages();
		return redirect('/local');
	}
	//Para a validação de muitos componentes
	php artisan make:request OqueéValidadoRequest
	//App/Http/Requests
	public function rules(){
		return [
			'nomecampo' => 'regras',
			'nomecampo' => 'regras'
		];
	}
	public function messages(){
		return [
			"nome.regra" => 'mensagem',
			'regra' => 'Mensagem :attribute'
		]
	}
	//Enviar como paramentro da função do controler
	public function a(nomeClasse $request){
		Produto::create($request->all());
	}
	//Para realizar login de usuários
	use Auth;
	$credenciais = Request::only('usuario', 'senha');
	Auth::attempt($credenciais); //Verifica as credencias e retorna true ou false

	Auth::guest() //Retorna se o usuário é um convidado ou um usuário logado

	//Utilizando Middlewares
	php artisan make:middleware nome
	//Após configurar, abrir o Kernel e registrar o novo Middleware
	if (!$request->is('login') && Auth::guest()) {}

	//Se registrar o Middleware na parte de rotas
	function __construct() {
		$this->middleware('nome' , ['only' => ['adiciona', 'remove']]);
	}

	//Para criar Seeds
	1 - Abrir Databaseseeder.php
	2 - Criar uma classe
		class NomeTabelaSeeder extends Seeder {
			public function run(){
				ClasseModel::create(['chave' => 'valor', 'chave' => 'valor'])
			}	
		}
	3 - Executar o comando: php artisan db:seed ou php artisan db:seed --class=nomeclasse
