@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('storage/css/about.css')}}">
@endsection

@section('title', "Home")

@section('content')

<div class="container-fluid p-5">
    <h1>Craftsy - Shopping Small</h1>
    <p>We are the team behind Craftsy, super nice to meet you! We hope you enjoy your "shopping small" experience at Craftsy because we love to shop small from our crafters too!</p>
    <p>Craftsy is an e-commerce platform that mainly focuses in handmade merchandise from small business owners around the world. Born on 2023, our sole goal is to fight the fast fashion impact and to build a community of crafters, a safe space for us small business owners to create everything we love by hand and share them across the world.</p>
    <p>You are able to adopt or buy our crafter's makes too! Our crafters will be very pleased if their lovely creations can find a new home, because they can't store everything they make, right?</p>
    <p>If you have any questions or feedbacks regarding everything about us, please contact our team using the platforms below.</p>
    <div class="contact-us">
        <span>Contact Us</span>
        <br>
        <div class="contact">
            <a href="mailto:O@craftsy_inc">
                <img src="{{asset('storage/assets/crafts_ig.png')}}" alt="">
                @craftsy_inc
            </a>
        </div>
        <div class="contact">
            <a href="mailto:customerservice@craftsy.com">
                <img src="{{asset('storage/assets/crafts_voicemail.png')}}" alt="">
                customerservice@craftsy.com
            </a>
        </div>
        <div class="contact">
            <a href="tel:+6212345678910">
                <img src="{{asset('storage/assets/crafts_phn.png')}}" alt="">
                +62 123-4567-8910
            </a>
        </div>
    </div>
    <p>Best Regards,</p>
    <h2>Craftsy, where crafters meet the world.</h2>
</div>
</div>

@endsection