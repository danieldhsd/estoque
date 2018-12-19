<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProductController extends Controller{
	
	public function listProducts(){

		$produtos = DB::select('select * from produtos');

		if( view()->exists('listagem')){
			return view('listagem')->withProdutos($produtos);
		}

		else{
			echo "View não encontrada!!";
		}
	}

	public function mostra(){
		$id = Request::input('id', '0');

		$key = DB::select('select * from produtos where id =?', [$id]);

		if (empty($key)){
			return "Produto não encontrado!!";
		}

		if ( view()->exists('detalhes')) {
			return view('detalhes')->withKey($key[0]);
		}

		else{
			echo "View não Encontrada!!";
		}
	}
}

?>