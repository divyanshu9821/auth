@extends('layout')

@section('css')
<style>
    .resume {
        height: 94vh;
        width: 100%;
    }

    .res_btn {
        background-color: black;
        color: white;
    }

    body {
        overflow: hidden;
    }
</style>
@endsection


@section('content')
<iframe class="resume" src="{{asset('assets/Divyanshu_singhal.pdf');}}" frameborder="0"></iframe>
@endsection