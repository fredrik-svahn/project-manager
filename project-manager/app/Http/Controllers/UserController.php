<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function login(Request $request)
    {
        $request->validate([
                               "email"    => "email|required|exists:users",
                               "password" => "string|required",
                           ]);

        if (!Auth::attempt([
                               'email'    => $request->email,
                               'password' => $request->password
                           ])) {
            return false;
        }

        $user = User::where("email", $request->email)
                    ->get()
                    ->first();

        $user->tokens()
             ->where("name", "login")
             ->delete();

        $token = $user->createToken("login");
        return ['token' => $token->plainTextToken];
    }
}
