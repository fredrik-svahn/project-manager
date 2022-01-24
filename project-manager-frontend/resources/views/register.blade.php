@extends('head')

@section('body')
    <form action="/register" method="post">
        @csrf
        <p>Email</p>
        <input type="email" name="email">
        <p>Password</p>
        <input type="password" name="password">
        <p>Password confirmation</p>
        <input type="password" name="password_confirm">
        <br>
        <button type="submit">Submit</button>
    </form>
@endsection
