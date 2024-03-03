@extends('common_layouts.app_wrapper')

@section('content')
<form class="" id="login-form" method="post" action="{{route('sign_in')}}">
    @csrf
    <label for="contact">Mobile Number</label>
    <input type="tel" name="contact" id="contact">
    @error('contact')
    
    @enderror
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Continue">
</form>
@endsection