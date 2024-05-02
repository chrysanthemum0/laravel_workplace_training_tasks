@extends('layouts.app')

@section('content')
<h1>Create Account</h1>
@include('commons.flash')
<form action="{{ route('register') }}" method="post" >
    @csrf
    <p>
        <label>名前</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
    </p>
    <p>
        <labe>Email</labe><br>
        <input type="email" name="email" value="{{ old('email') }}">
    </p>
    <p>
        <label>PassWord</label><br>
        <input type="password" name="password" value="">
    </p>
    <p>
        <label>Check PassWord</label><br>
        <input type="password" name="password_confirmation" value="">
    </p>
    <p>
        <button type="submit">Regsit Now</button>
    </p>
    <p>OR</p>
    <p>
        <a href="{{ route('login') }}">To Login</a>
    </p>
</form>
@endsection
