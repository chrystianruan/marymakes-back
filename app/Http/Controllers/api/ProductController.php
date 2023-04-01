<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProductController extends Controller
{
    public function index() {
        $produtos = Produto::select("produtos.*", "categorias.nome_categoria as categoria", "tipos.nome_tipo as tipo", "marcas.nome_marca as marca")
        ->join("categorias", "categorias.id", "=", "produtos.categoria_id")
        ->join("tipos", "tipos.id", "=", "produtos.tipo_id")
        ->join("marcas", "marcas.id", "=", "produtos.marca_id")
        ->get();

        return $produtos;
    }

    public function show($id) {
        $produto = Produto::findOrFail($id);

        return $produto;
    }
}
