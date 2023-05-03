<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function logout(Request $request) {
        $request->user()->tokens()->delete();
        return ['message' => 'All user tokens were revoked!'];
    }
}
