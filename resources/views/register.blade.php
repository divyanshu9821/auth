@extends('layout')

@section('content')
<form class="" id="registration-form" method="post" action="{{route('sign_up')}}">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    @error('name'){{$message}}@enderror
    <label for="contact">Mobile Number</label>
    <input type="tel" name="contact" id="contact">
    @error('contact'){{$message}}@enderror
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    @error('password'){{$message}}@enderror
    <input type="submit" value="Continue">
</form>
@endsection