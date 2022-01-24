@extends('head')


@section('body')
    <h1>Log in to your account</h1>
    <form action="/login" method="POST">
        @csrf
        <p>Email</p>
        <input type="text" name="email">
        <p>Password</p>
        <input type="password" name="password">
        <br>
        <label for="remember">Remember me</label>
        <input type="checkbox" name="remember">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>

@endsection
