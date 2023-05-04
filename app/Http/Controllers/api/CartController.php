<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrinho;

class CartController extends Controller
{

    public function insertProductOnCart(Request $request) {
        $carrinho = new Carrinho;
        $carrinho->produto_id = $request->produto_id;
        $carrinho->quantidade = $request->quantidade;
        $carrinho->user_id = $request->user_id;
        $carrinho->save();

        return response()->json([
            "response" => "Produto adicionado ao carrinho com sucesso"
        ], 200);
    }

    public function getAllProductsOnCart() {
        $products = Carrinho::select('produtos.imagens','produtos.nome', 'categorias.nome_categoria', 'carrinhos.quantidade')
        ->where('user_id', '=', auth()->user()->id)
        ->join('produtos', 'produtos.id', '=', 'carrinhos.produto_id')
        ->join('categorias', 'categorias.id', '=', "produtos.categoria_id")
        ->get();

        if ($products->count() <= 0) {
            $products = null;
        }
        return response()->json([
            "products_on_cart" => "".$products
        ], 200);
        
    }
}
