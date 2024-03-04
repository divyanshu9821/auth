@extends('layout')

@section('css')
<style>
    .log_btn {
        background-color: black;
        color: white;
    }
</style>
@endsection

@section('content')
<div class="container">
    <form class="" id="login-form" method="post" action="{{route('sign_in')}}">
        @csrf
        <div class="unit">
            <label for="contact">Mobile Number</label>
            <div>
                <input type="tel" name="contact" id="contact">
                <span class="error">@error('contact'){{$message}}@enderror</span>
            </div>
        </div>
        <div class="unit">
            <label for="password">Password</label>
            <div>
                <input type="password" name="password" id="password">
                <span class="error">@error('password'){{$message}}@enderror</span>
            </div>
        </div>
        <div class="unit">
            <input type="submit" value="Continue">
        </div>
    </form>
</div>
@endsection