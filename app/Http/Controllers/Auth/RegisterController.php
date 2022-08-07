<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $requestData['role'] = 'participant';

        $password = bcrypt($requestData['password']);

        $requestData['password'] = $password;

        User::create($requestData);
    }
}
