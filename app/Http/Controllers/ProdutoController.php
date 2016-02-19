<?php namespace estoque\Http\Controllers;
	use Illuminate\Support\Facades\DB;
	use Request;
	use estoque\Produto;
	use Validator;

	class ProdutoController extends Controller {
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
			return view('produto/formulario');
		}
		public function adiciona() {
			$validator = Validator::make(
					['nome' => Request::input('nome'),
						'descricao' => Request::input('descricao'),
						'valor' => Request::input('valor'),
						'quantidade' => Request::input('quantidade')
					],
					['nome' => 'required|min:5',
					'descricao' => 'required|max:255',
					'valor' => 'required|numeric',
					'quantidade' => 'required|numeric']
				);
			if ($validator->fails()) {
				$validator->messages();
				return redirect('/produtos/novo');
			}
			Produto::create(Request::all());
			return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
		}
		public function listaJSON() {
			$produtos = DB::select('select * from produtos');
			return response()->json($produtos);
		}
		public function remove($id) {
			$produto = Produto::find($id);
			$produto->delete();
			return redirect()->action('ProdutoController@lista');
		}
	}