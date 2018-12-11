@extends('master')

@section('title', 'Mobitel detalji')

@section('sidebar')
    @parent

    <p>Ovo su linkovi za mobitel:</p>
    <a href="/mobitels">Svi mobiteli</a>
    
@endsection

@section('content')
    <p>Detalji mobitela:</p>
    <?php
    //dd($mobitel);
    ?>
    <h3>Hello, {{ $mobitel->producer }}.</h3>
    
    Trenutna cijena je <span style="font-weight: bold; color: #e3342f">{{ $mobitel->price }} </span><br>
    Model je: {{ $mobitel->model }}, veličina ekrana je {{ $mobitel->screen }} 
    
    
@endsection

