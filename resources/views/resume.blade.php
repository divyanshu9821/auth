@extends('common_layouts.app_wrapper')

@section('css')
<style>
    .resume{
        height:100vh;
        width:100%;
    }
    
    body{
        overflow:hidden;
    }
</style>
@endsection


@section('content')
<iframe class="resume" src="{{asset('assets/Divyanshu_singhal.pdf');}}" frameborder="0"></iframe>
@endsection