@extends('layout')

@section('css')
<style>
    .home_btn{
        background-color:black;
        color:white;
    }

    .greet{
        font-size:10rem;
    }
</style>
@endsection

@section('content')
    <div class="welcome"><span class="greet">Hello!</span></div>
@endsection