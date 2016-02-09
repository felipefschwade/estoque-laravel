<?php namespace estoque\Http\Controllers;
	use Illuminate\Support\Facades\DB;
	class ProdutoController extends Controller {
		public function lista() {
			$produtos = DB::select('select * from produtos');
			return view('listagem')->with('produtos', $produtos);
		}
		public function mostra(){
			$id = 1;
			$produto = DB::select('select * from produtos where id = ?', [$id]);
			return view('detalhes')->with('produto', $produto[0]);
		}
	}