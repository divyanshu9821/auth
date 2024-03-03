@extends('common_layouts.app_wrapper')

@section('content')
<form class="" id="registration-form" method="post" action="{{route('sign_up')}}">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="contact">Mobile Number</label>
    <input type="tel" name="contact" id="contact">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Continue">
</form>
@endsection