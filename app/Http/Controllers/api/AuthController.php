<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class AuthController extends Controller
{
    public function authentication(Request $request) {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('token');
            return response()->json(
                [
                    "token" => $token->plainTextToken,
                    "user_id" => auth()->user()->id,
                ]
            , 200);
        } else {
            return abort(401);
        }
    }
}
