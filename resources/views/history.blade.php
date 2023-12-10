@extends('layout')

@section('title', 'History Page')

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
            <h1 class="pageTitle">Transaction History</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Item ID</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $i)
                <tr>
                    <th scope="row">{{ $i->id }}</th>
                    <td>{{ $i->item_id }}</td>
                    <td>{{ $i->qty }}</td>
                    <td>{{ $i->date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection