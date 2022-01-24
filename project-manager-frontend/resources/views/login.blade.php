@extends('head')


@section('body')
    <p>Login</p>
    <form action="/login" method="POST">
        <input type="text" name="email">
        <input type="text" name="password">
    </form>

@endsection
