@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('storage/css/home.css')}}">
@endsection

@section('title', "Home")

@section('content')

<div class="d-flex flex-col mt-5 p-16">
    <h2 style="color:rgb(141,123,104); font-family:Abhaya Libre ExtraBold;font-weight: 800; font-size:36px;">{{ $search }}</h2>
    <p>{{ $error }}</p>
    @foreach($items as $i)
        <a href="#" class = "m-2" style = "text-decoration: none; width: 125px;">
            @component('components.product_card')
            @slot('image')
            {{ $i->image_path }}
            @endslot
            @slot('name')
            {{ $i->name }}
            @endslot
            @slot('rating')
            {{ $i->rating }}
            @endslot
            @slot('price')
            {{ $i->price }}
            @endslot
            @endcomponent
        </a>
        @endforeach
</div>

@endsection