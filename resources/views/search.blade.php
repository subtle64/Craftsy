@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('storage/css/home.css')}}">
@endsection

@section('title', "Home")

@section('content')

<div class="d-flex flex-column mt-5 p-5">
    <div class = "d-flex flex-column">
        <h2 style="color:rgb(141,123,104); font-family:Abhaya Libre ExtraBold;font-weight: 800; font-size:36px;">{{ $heading }}<u>{{ $search }}</u></h2>
        <p style="font-weight: 300; font-size:20px;">{{ $error }}</p>
    </div>
    <div class = "d-flex">
        @foreach($items as $i)
        <a href="{{"/item/$i->id"}}" class="m-2" style="text-decoration: none; width: 15%;">
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
</div>

@endsection