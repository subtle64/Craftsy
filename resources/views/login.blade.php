@extends('form_layout')

@section('css')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('storage/css/login.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection

@section('title', 'Login')

@section('content')
<div id="outer" style="background-position:center;background-repeat: no-repeat;background-image:url('https://pradaandpearls.com/wp-content/uploads/2022/03/Blank-600-x-900-217.png');background-size:cover;background-attachment: fixed;height:750px;width:100%; font-family: Abhaya Libre;">
    <div class="bg-image" style="background-position:center;background-repeat: no-repeat;background-size:cover;background-attachment: fixed;height:900px;width:100%;">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6 col-lg-6" style="margin-top:300px;">
                    <div class="text-center">
                        <h1 style="color:#8D7B68; font-size: 90px">Craftsy</h2>
                            <p style="color:#8D7B68; font-size: 30px">where crafters meet the world</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6" style="margin-top:20px;">

                    <div class="card o-hidden border-0 shadow-lg my-5" style="background-color:#F1DEC9;">
                        <div class="card-body">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 mb-2" style="font-family:Abhaya Libre ExtraBold;color:#8D7B68; font-size: 40px">Sign In</h1>
                                </div>
                               
                                <form action="/login" method="POST" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" style="font-family:Ubuntu; color:#8D7B68;margin-top:10px; font-size: 20px">Email</label>
                                        <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" style="border-radius:1rem;margin-top:5px;" aria-describedby="emailHelp">
                                    </div>
                                    <div>
                                        @error('email')
                                        <div style="color: red; font-size: 15px">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd" style="font-family:Ubuntu; color:#8D7B68;margin-top:15px; font-size: 20px">Password</label>
                                        <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" style="border-radius:1rem;margin-top:5px;">
                                    </div>
                                    @error('password')
                                    <div style="color: red; font-size: 15px">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group" style="margin-top:10px;">
                                        <div class="custom-control custom-checkbox small">
                                            <input name="remember" type="checkbox" class="custom-control-input" id="customCheck" style="background: #8D7B68">
                                            <label class="custom-control-label" for="customCheck" style="color:#8D7B68;  font-size: 20px">Remember
                                                my email and password</label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-block btn-user text-white btn-hover" style="background-color: #8D7B68; width: fit-content; font-size: 20px; padding: 10px; border-radius: 25px">Sign In </button>
                                    </div>
                                </form>
                                <hr style="border:2px solid #8D7B68">
                                <div class="text-center">
                                    <h1 style="font-family:Abhaya Libre ExtraBold;color:#8D7B68;font-size:25px;">Don't have an account yet?</h1>
                                    <a href = "/register" class="btn btn-block btn-user text-white btn-hover" style="background-color: #8D7B68!important; width: fit-content; font-size: 20px; padding: 10px; border-radius: 25px">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/4f5cb0884a.js" crossorigin="anonymous"></script>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>


<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

@endsection