<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // harus pake bcrypt
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('token')->plainTextToken;

            $cookie = cookie('jwt', $token, 60*24);

            // return response()->json(['token' => $token]);
            return response()->json(['message' => 'Success'])->withCookie($cookie);
        }

        return response()->json(['error' => 'Unauthorized'], 200);
    }

    public function logout(Request $request)
    {
        $cookie = Cookie::forget('jwt');
        $request->user()->tokens()->delete(); 

        // tidak boleh pake
        // Auth::logout();

        return response()->json(['message' => 'Successfully logged out hehe'])->withCookie($cookie);
    }

    public function user(){
        return Auth::user();
    }
}
