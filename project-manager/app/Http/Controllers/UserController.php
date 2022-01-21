<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
                               "name"     => "string|required",
                               "email"    => "email|required|unique:users",
                               "password" => "string|required"
                           ]);

        $data['password'] = Hash::make($request->password);
        return User::create($data);
    }
}
