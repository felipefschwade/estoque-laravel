<?php namespace estoque\Http\Controllers;
	use Illuminate\Support\Facades\DB;
	use Request;
	use estoque\Produto;
	use estoque\Categoria;
	use estoque\Http\Requests\ProdutoRequest;
	class ProdutoController extends Controller {

	    function __construct() {
	   		$this->middleware('auth' , ['only' => ['adiciona', 'remove', 'novo']]);
	    }
		public function lista() {
			$produtos = Produto::all();
			return view('produto/listagem')->with('produtos', $produtos);
		}
		public function mostra($id) {
			$produto = Produto::find($id);
			if (empty($produto)) {
				echo "Este Produto não Existe!";
			} else {
				return view('produto/detalhes')->with('produto', $produto);
			}
		}
		public function novo() {
			return view('produto/formulario')->with('categorias' , Categoria::all());
		}
		public function adiciona(ProdutoRequest $Request) {
			Produto::create($Request->all());
			return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
		}
		public function listaJSON() {
			$produtos = DB::select('select * from produtos');
			return response()->json($produtos);
		}
		public function remove($id) {
			$produto = Produto::find($id);
			Request::session()->flash('status', 'O Produto '.$produto->nome.' foi removido com sucesso!');
			$produto->delete();
			return redirect()->action('ProdutoController@lista');
		}
	}