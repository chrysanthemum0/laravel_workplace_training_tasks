@extends('layouts.app')

@section('content')
<h1>Login</h1>
@include('commons.flash')
<form action="{{ route('login') }}" method="post" >
    @csrf
    <p>
        <label>Email</label><br>
        <input type="email" name="email" value="{{ old('email') }}">
    </p>
    <p>
        <label>PassWord</label><br>
        <input type="password" name="password" value="">
    </p>
    <p>
        <button type="submit">Login</button>
    </p>
    <p>OR</p>
    <p>
        <a href="{{ route('register') }}">New Account</a>
    </p>
</form>

@endsection
