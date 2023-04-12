<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authentication(Request $request) {
        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            return response()->json([
                "response" => "Acesso autorizado"
            ], 200);
        } else {
            return abort(403);
        }
    }
}
