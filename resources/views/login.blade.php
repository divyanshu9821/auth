@extends('layout')

@section('content')
<form class="" id="login-form" method="post" action="{{route('sign_in')}}">
    @csrf
    <label for="contact">Mobile Number</label>
    <input type="tel" name="contact" id="contact">
    @error('contact'){{$message}}@enderror
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    @error('password'){{$message}}@enderror
    <input type="submit" value="Continue">
</form>
@endsection