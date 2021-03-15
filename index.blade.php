@extends('template/layout')

@section('title','Halaman Utama')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.style.css')}}">
@endsection
@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4"> <span class="font-weight-bold">Ratoh Jaroe SMK Telkom Jakarta</h1>
        <p class="lead">Clapping hands, clapping chest, and slapping on the floor</p>
        <hr class="my-4">
        <p>Segera daftar dan bergabung bersama kami!</p>
        <a class="btn btn-secondary btn-lg" href="#" role="button">DAFTAR</a>
    </div>
</div>
@endsection