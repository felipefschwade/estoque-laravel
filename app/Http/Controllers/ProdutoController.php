<?php namespace estoque\Http\Controllers;
	use Illuminate\Support\Facades\DB;
	class ProdutoController extends Controller {
		public function lista() {
			$produtos = DB::select('select * from produtos');
			return view('listagem')->with('produtos', $produtos);
		}
		public function mostra(){
			$protudo = DB::select('select * from produtos where id = ?' [1]);
			return view('detalhes')->with('produto', $produto);
		}
	}