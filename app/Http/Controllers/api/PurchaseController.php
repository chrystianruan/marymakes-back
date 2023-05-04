<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrinho;
use App\Models\Purchase;


class PurchaseController extends Controller
{
    public function purchase(Request $request) {
        $itemsCart = Carrinho::select('produtos.imagens','produtos.nome', 'categorias.nome_categoria', 'carrinhos.quantidade')
        ->where('user_id', '=', auth()->user()->id)
        ->join('produtos', 'produtos.id', '=', 'carrinhos.produto_id')
        ->join('categorias', 'categorias.id', '=', "produtos.categoria_id")
        ->get();

        $purchase = new Purchase;
        $purchase->produtos = ["$itemsCart"];
        $purchase->valor_total = $request->valor_total;
        $purchase->user_id = auth()->user()->id;

        Carrinho::where('user_id', '=', auth()->user()->id)->delete();

        return response()->json([
            "response" => "Compra realizada com sucesso e carrinho limpo."
        ], 200);
        
    }
}
