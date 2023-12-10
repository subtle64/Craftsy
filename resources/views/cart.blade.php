@extends('layout')

@section('title', 'Detail Page')

@section('css')
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('storage/css/cart.css')}}">
@endsection

@section('content')
<div class="outerContainer">

    <div class="containerCartPage">

        <div class="pageTitleContainer">
            <h1 class="pageTitle">Your Cart</h1>
        </div>


        @foreach($result as $i)
        @component('components.cart_product')

        @slot('product_image')
        {{$i->image_path}}
        @endslot
        @slot('name')
        {{$i->item_name}}
        @endslot
        @slot('shop_image')
        Keychain.png
        @endslot
        @slot('shop_name')
        {{$i->shop_name}}
        @endslot
        @slot('price')
        {{$i->price}}
        @endslot
        @slot('id')
        {{$i->id}}
        @endslot
        @slot('quantity')
        {{$i->quantity}}
        @endslot
        @endcomponent
        @endforeach

    </div>
    <div class="bottomContainer">
        <div class="totalPrice">
            Total Price: ${{$total}}
        </div>
        <button class="buttonCart">
            <a href="/checkout" class="buttonText" style = "text-decoration:none;">Checkout</a>
        </button>
    </div>
</div>
@endsection