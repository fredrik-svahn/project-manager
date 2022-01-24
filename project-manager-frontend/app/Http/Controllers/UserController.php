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

    public function login_post()
    {
        
    }

    public function register()
    {
        return view('register');
    }

    public function register_post(Request $request)
    {
        $api      = new API();
        $path     = "/api/user";
        $data     = $request->all();

        $response =
            $api
                ->url($path)
                ->body($data)
                ->post()
                ->response();

        return $this->redirectWithErrors("/", $response);
    }

    /**
     * @param string $redirectTo
     * @param $response
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function redirectWithErrors(string $redirectTo, $response)
    {
        $redirect = redirect($redirectTo);

        if (isset($response['errors'])) {
            $redirect = redirect()->back();
            $redirect->withErrors($response['errors']);
        }

        return $redirect;
    }
}
