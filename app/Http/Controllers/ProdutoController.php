<?php namespace estoque\Http\Controllers;
	use Illuminate\Support\Facades\DB;
	use Request;
	use estoque\Produto;

	class ProdutoController extends Controller {
		public function lista() {
			$produtos = Produto::all();
			return view('produto/listagem')->with('produtos', $produtos);
		}
		public function mostra() {
			$id = Request::route('id');
			$produto = DB::select('select * from produtos where id = ?', [$id]);
			if (empty($produto)) {
				echo "Este Produto não Existe!";
			} else {
				return view('produto/detalhes')->with('produto', $produto[0]);
			}
		}
		public function novo() {
			return view('produto/formulario');
		}
		public function adiciona() {
			$nome = Request::input('nome');
			$valor = Request::input('valor');
			$quantidade = Request::input('quantidade');
			$descricao = Request::input('descricao');
			DB::insert('insert into produtos (nome, valor, quantidade, descricao) values (?,?,?,?)', array($nome, $valor, $quantidade, $descricao) );
			return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
		}
		public function listaJSON(){
			$produtos = DB::select('select * from produtos');
			return response()->json($produtos);
		}
	}