<?php namespace estoque\Http\Controllers;
	use Illuminate\Support\Facades\DB;
	use Request;
	class ProdutoController extends Controller {
		public function lista() {
			$produtos = DB::select('select * from produtos');
			return view('produto/listagem')->with('produtos', $produtos);
		}
		public function mostra(){
			$id = Request::route('id');
			$produto = DB::select('select * from produtos where id = ?', [$id]);
			if (empty($produto)) {
				echo "Este Produto não Existe!";
			} else {
				return view('produto/detalhes')->with('produto', $produto[0]);
			}
		}
		public function novo(){
			return view('produto/formulario');
		}
	}