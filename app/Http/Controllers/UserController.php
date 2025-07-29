<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(StoreUserRequest $request, User $user)
    {
        dd($request->all());
    }
}
