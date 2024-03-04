@extends('loginlayout')

@section('css')
<style>
    #tax{
        font-size:2rem; 
    }
</style>
@endsection

@section('content')
<div>
    <input type="number" name="income" id="income">
    <input type="button" onclick="getTax()" value="Calculate">
    <br>
    <span id="tax"></span>
</div>
@endsection

@section('js')
<script>
    function response(){
        let tax_span = document.querySelector('#tax');
        let message = "{{$name}}, You have to pay "+this.response+" as a tax from your income.";
        tax_span.innerText = message;
    }
    function getTax(){
        let income_input = document.querySelector('#income');
        let income_val = income_input.value;
        if(income_val == '') income_val = 0;
        var xhr = new XMLHttpRequest();
        xhr.open('get',`/api/tax/${income_val}`,true);
        xhr.send();
        xhr.onload = response;
    }
</script>
@endsection