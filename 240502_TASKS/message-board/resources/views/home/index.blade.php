@extends('layouts.app')

@section('content')
<h1>My Page</h1>
<p>Your Name : {{ $login_user->name }}</p>
<p>Your ID : {{ $login_user->email }}</p>
<p><a href="{{ route('home.edit') }}">Rename Account</a></p>
<form action="{{ route('logout') }}" method="post" >
    @csrf
    <p><input type="submit" value="Logout"></p>
</form>
@endsection
