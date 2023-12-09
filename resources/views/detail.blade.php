@extends('layout')

@section('title', 'Detail Page')
    
@section('css')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('storage/css/detail.css')}}">
<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection

@section('content')
@if (isset($items))    
<div class="containerOuter w-100">
    <div class="upper d-flex align-itemss-center justify-content-sm-left">
        <div class="left d-flex justify-content-sm-center">
            <img src="{{asset('storage/assets/'.$items->image_path)}}" alt="" class="productImage">
        </div>
        <div class="right">
            <div class="productTitle">
                {{$items->name}}
            </div>
            <div>
                <table class="tableProperties">
                    <tbody>
                        <tr class="tableRow">
                            <th class="thTable" scope="row">Category</th>
                            <td class="space"></td>
                            <td class="tableValue">{{$items->type}}</td>
                        </tr>
                        <tr class="tableRow">
                            <th class="thTable" scope="row">Stock</th>
                            <td class="space"></td>
                            <td class="tableValue">{{$items->stock}}</td>
                        </tr>
                        <tr class="tableRow">
                            <th class="thTable" scope="row">Price</th>
                            <td class="space"></td>
                            <td class="tableValue">${{sprintf("%0.2f", $items->price)}}</td>
                        </tr>
                        <tr class="tableRow">
                            <th class="thTable" scope="row">Review</th>
                            <td class="space"></td>
                            <td class="tableValue">
                                <div class="rating-container">
                                        @php
                                            $counter = 0;
                                            $new_rating = $items->rating * 10;
                                            $remaining = 0;
                                        @endphp
                                        @for ($j = $new_rating; $j > 0; $j--)
                                            @if ($j % 10 == 0)
                                                <i class="fa fa-star"></i>
                                                @php
                                                    $counter++;
                                                @endphp
                                                @if ($counter == 5)
                                                    @break
                                                @endif
                                            @elseif($j < 10)
                                                @php
                                                    $remaining = $j;
                                                @endphp
                                                @break
                                            @endif
                                        @endfor
                                        @if ($remaining != 0)
                                            <i class="fa fa-star-half-o"></i>
                                            @php
                                                $counter++;
                                            @endphp
                                        @endif
                                        @for ($j = 0; $j < 5 - $counter; $j++)
                                            <i class="fa fa-star-o"></i>
                                        @endfor    
                                        <span class="valueText">{{$items->rating}}</span>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr class="tableRow">
                                    <th class="thTable" scope="row">Shop</th>
                                    <td class="space"></td>
                                    <td class="">
                                        <div class="d-flex align-itemss-center justify-content-sm-center">
                                          <img src="{{asset('storage/assets/Bags.png')}}" alt="" class="shopProfile">
                                          <p class="valueText">{{$shop->name}}</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                </div>
                <div>
                    <button class="btn" style="background-color: #8D7B68; font-size: 0.9vw; padding: 10px; padding-left: 20px; padding-right: 20px; border-radius: 25px; margin-right: 20px">
                        Add to Wishlist
                    </button>
                    <button class="btn" style="background-color: #A4907C; font-size: 0.9vw; padding: 10px; padding-left: 20px; padding-right: 20px; border-radius: 25px">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
        <div class="bottom">
            <p class="descTitle">Description</p>
            <p class="descParagraph">A crocheted bunnie holding one huge lily of the valley stem. Standing pretty fully while fully decorated with small beads and transparent butterflies, she’s such a perfect figurine decoration for your room. This figurine is customizable, so please chat the shop owner if you’re interested in customization.</p>
            <div class="sizeContainer">
                <p class="size">Height : 20cm</p>
                <p class="size">Length : 20cm</p>
                <p class="size">Width : 20cm</p>
            </div>
            <div class="recommendation">
                <a href="{{"/more/$items->type"}}" class="more">See more like this</a>
            </div>
        </div>
    </div>
    @endif
    @endsection