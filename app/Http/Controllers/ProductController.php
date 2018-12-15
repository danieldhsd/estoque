<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller{
	
	public function listProducts(){

		$html = '<h1>Lista de Produtos</h1>';
		$html.= '<ul>';

		$products = DB::select('select * from produtos');

		foreach ($products as $key) {
			$html .='<li>Name: ' .$key->nome. ', Description: '.$key->descricao.'</li>';
 		}

		$html .='</ul>';

		return $html;
	}
}

?>