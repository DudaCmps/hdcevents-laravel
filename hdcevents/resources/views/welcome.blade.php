@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    
<h1>Titulo</h1>
<img src="/img/vertical.jpg" alt="">

@if(10 < 5)
    <p>a condição é true</p>
@endif

@if($nome == "Pedro")
    <p>O nome é Pedro</p>
@elseif($nome == "Maria")
    <p>O nome é {{$nome}}</p>
@else
    <p>O nome não é pedro e nem maria</p>
@endif

@if($idade > 18)
    <p>{{$nome}} é maior de idade pois tem {{$idade}} anos! Ela já é {{$profissao}}</p><br><br>
@else
    <p>{{$nome}} é menor de idade ainda!</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    @if($i <= 0)
            <p>O índice iniciou agora</p> <br>
        @endif
    <p>{{ $arr[$i] }} - {{$i}}</p>
    
@endfor

@php
    $name = "Felipe";
    echo $name;
@endphp
@endsection