<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class API
{
    private $api_url;
    private $token;
    private $method;
    private $body;
    private $request_url;


    public function __construct()
    {
        $this->api_url = env("API_URL");
        $this->token   = session(['api_token']);
    }

    public function post()
    {
        $this->method = "POST";
        return $this;
    }

    public function get()
    {
        $this->method = "GET";
        return $this;
    }

    public function put()
    {
        $this->method = "PUT";
        return $this;
    }

    public function delete()
    {
        $this->method = "DELETE";
        return $this;
    }

    public function body($body)
    {
        $this->body = $body;
        return $this;
    }

    public function url($url)
    {
        $this->request_url = $url;
        return $this;
    }

    public function response()
    {
        return Http::withToken($this->token)->send($this->method, $this->api_url . $this->request_url, $this->body);
    }
}
