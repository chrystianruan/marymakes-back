<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    public function newUser(Request $request) {
        $user = new User;
        $user->name = $request->nome;
        $user->email = $request->email;
        $user->telefone = $request->telefone;
        $user->password = bcrypt($request->password);
        $user->email_verified_at = Carbon::now();
        $user->save();

        return response()->json([
            'response' => 'sucess'
        ], 201);
    }

}
