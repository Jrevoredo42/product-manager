@extends('layouts.main')

@section('title', 'Products')

@section('content')
<h1>Tela de produtos</h1>
@if($busca != '1');
<p>O usuario esta buscando por {{ $busca }}</p>
@endif
@endsection
