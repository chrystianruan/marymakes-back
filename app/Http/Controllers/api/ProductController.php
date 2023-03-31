<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProductController extends Controller
{
    public function index() {
        $produtos = Produto::all();

        return $produtos;
    }

    public function show($id) {
        $produto = Produto::findOrFail($id);

        return $produto;
    }
}
