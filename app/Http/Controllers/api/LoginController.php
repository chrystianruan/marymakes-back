<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authentication(Request $request) {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                "response" => "Acesso autorizado"
            ], 200);
        } else {
            return abort(403);
        }
    }
}
