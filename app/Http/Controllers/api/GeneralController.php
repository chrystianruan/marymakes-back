<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marca;

class GeneralController extends Controller
{
    public function getAllMarcas() {
        $marcas = Marca::select('nome_marca')->get();

        return $marcas;

    }
}
