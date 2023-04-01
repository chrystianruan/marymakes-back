<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Tipo;
use App\Models\Categoria;

class GeneralController extends Controller
{
    public function getAllMarcas() {
        $marcas = Marca::select('id', 'nome_marca')->get();

        return $marcas;
    }

    public function getAllTipos() {
        $tipos = Tipo::select('id', 'nome_tipo')->get();

        return $tipos;
    }

    public function getAllCategorias() {
        $categorias = Categoria::select('id', 'nome_categoria')->get();
        
        return $categorias;
    }
}
