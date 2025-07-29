<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(StoreUserRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        dd($credentials);

        $loged = Auth::attempt($credentials);

        if($loged) {
            return redirect()->route('task.index');
        }

        return back()->with('error', 'Ocorreu um erro ao fazer login. Verifique a sua conexão a internet!');
    }

    public function logout()
    {
        
    }
}
