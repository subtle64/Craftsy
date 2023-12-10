@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('storage/css/home.css')}}">
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('storage/css/login.css')}}">
@endsection

@section('title', "Home")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 style="color: #8D7B68;font-family: Abhaya Libre ExtraBold;margin-top:20px;  ">Checkout Summary</h3>
            <hr style="border: 1px black solid;">
            @php
                $subtotal = 0;
            @endphp
            @foreach($result as $i)
            <div class="row">
                <div class="col-2">
                    <img style="width: 67px; height: 67px; border-radius: 20px" src="{{asset("storage/assets/$i->image_path")}}" />
                </div>
                <div class="col-8">
                    <p style="width:250px;font-size: 20px;font-family: Abhaya Libre Medium;">{{ $i->item_name }}</p>
                </div>
                <div class="col-2">
                    <p style="width:50px;font-size: 16px;font-family: Ubuntu; margin-left:20px;text-align:right;">${{$i->price}}x{{$i->quantity}}</p>
                </div>
            </div>
            <hr style="border: 1px black solid;">
            @php
                $subtotal += $i->quantity * $i->price;
            @endphp
            @endforeach
            <div class="row">
                <div class="col">
                    <p style="color: black;font-size: 16px;font-family: Ubuntu;"> Subtotal :</p>
                </div>
                <div class="col">
                    <p style="color: black;font-size: 16px;font-family: Ubuntu;float:right;">${{ $subtotal }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p style="color: black;font-size: 16px;font-family: Ubuntu;"> Tax(10%) :</p>
                </div>
                <div class="col">
                    <p style="color: black;font-size: 16px;font-family: Ubuntu;float:right;">${{ $subtotal/10 }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p style="color: black;font-size: 16px;font-family: Ubuntu;"> Delivery Fee :</p>
                </div>
                <div class="col">
                    <p style="color: black;font-size: 16px;font-family: Ubuntu;float:right;">$5.00</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p style="color: black;font-size: 16px;font-family: Ubuntu;font-weight:bold;"> Total :</p>
                </div>
                <div class="col">
                    <p style="color: black;font-size: 16px;font-family: Ubuntu;float:right;font-weight:bold;">${{ $subtotal * 1.1 + 5 }}</p>
                </div>
            </div>
            <hr style="border: 1px black solid;margin-bottom:200px;">


        </div>
        <div class="col-md-6">
            <h3 style="color: #8D7B68;font-family: Abhaya Libre ExtraBold;margin-top:20px;  ">Select Payment</h3>
            <a href="" type="button" class="btn btn-primary" style="width:150px;border-radius:60px;margin-top:10px;color: white;font-size: 16px;font-family: Abhaya Libre;background-color:#8D7B68;"> Credit Card</a>
            <a href="" type="button" class="btn btn-primary" style="width:150px;border-radius:60px;margin-top:10px;color: white;font-size: 16px;font-family: Abhaya Libre;background-color:#8D7B68;"> Debit Card</a>
            <form action="/checkout" method = "POST">
                @csrf
                <div class="row" style="margin-top:10px">
                    <div class="col">
                        <label for="name" style="font-size: 11px;font-family: Ubuntu;">Name</label><br>
                        <input type="text" id="name" style="border-radius:50px;width:240px;">
                    </div>
                    <div class="col">
                        <label for="cardNum" style="font-size: 11px;font-family: Ubuntu;">Card Number</label><br>
                        <input type="text" id="card_number" style="border-radius:50px;width:240px;">
                    </div>
                </div>
                <div class="row" style="margin-top:10px">
                    <div class="col">
                        <label for="expiryDte" style="font-size: 11px;font-family: Ubuntu;">Expiry Date</label><br>
                        <input type="text" id="expiry_date" style="border-radius:50px;width:240px;">
                    </div>
                    <div class="col">
                        <label for="tdg" style="font-size: 11px;font-family: Ubuntu;">Three Digit Number</label><br>
                        <input type="text" id="cvv" style="border-radius:50px;width:240px;">
                    </div>
                </div>
                <input type="checkbox" id="check">
                <label for="check" style="color: #8D7B68;font-size: 15px;font-family: Ubuntu; margin-top:10px;">I guarantee that all of the information above is mine</label>
                <hr style="border: 1px black solid;">
                <div class="row" style="margin-top:10px">
                    <div class="col">
                        <label for="otp" style="font-size: 11px;font-family: Ubuntu;">OTP</label><br>
                        <input type="text" id="otp" style="border-radius:50px;width:240px;">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary" style="width:110px;border-radius:60px;margin-top:20px;color: white;font-size: 16px;font-family: Abhaya Libre;background-color:#F1DEC9;">Pay</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<!-- 

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Checkout</title>

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/login.css">
</head>

<body class="bg-gradient-primary">



      <script src="https://kit.fontawesome.com/4f5cb0884a.js" crossorigin="anonymous"></script>

  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html> -->