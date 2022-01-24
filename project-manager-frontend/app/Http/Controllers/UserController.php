<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function register_post(Request $request)
    {
        $api      = new API();
        $response =
            $api
                ->url("/api/register")
                ->body($request->all())
                ->post()
                ->response();
        dd($response);
        return false;
    }
}
