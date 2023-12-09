@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('storage/css/home.css')}}">
@endsection

@section('title', "Home")

@section('content')

<div class="container-fluid mt-5 p-16">
    <div class="d-flex justify-content-center" style="margin-left:60px;margin-right:60px;">
        @foreach($categories as $c)
        @component('components.category_card')
                @slot('type')
                {{ $c }}
                @endslot
                @slot('image')
                {{ $c . '.png' }}
                @endslot
                @slot('name')
                {{ $c }}
                @endslot
        @endcomponent
        @endforeach
    </div>
    <br>
    <h2 style="color:rgb(141,123,104); font-family:Abhaya Libre ExtraBold;font-weight: 800; font-size:36px;">Best-selling Items This Month</h2>
    <div class="row">
        @foreach($items as $i)
        <a href="{{"/item/$i->id"}}" class="col-md " style = "text-decoration: none;">
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