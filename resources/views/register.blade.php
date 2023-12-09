<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Login</title>

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/login.css">
</head>

<body class="bg-gradient-primary" style = "overflow-x:hidden;">
  <div class="bg-image" style="background-position:center;background-repeat: no-repeat;background-image:url('https://pradaandpearls.com/wp-content/uploads/2022/03/Blank-600-x-900-217.png');background-size:cover;background-attachment: fixed;height:100%;width:100%;;position:relative;opacity:0.75;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6" style="margin-top:300px;">
          <div class="text-center">
            <h2 style="color:#8D7B68;">Craftsy</h2>
            <p style="color:#8D7B68;">where crafters meet the world</p>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6" style="margin-top:20px;">

          <div class="card o-hidden border-0 shadow-lg my-5" style="background-color:#F1DEC9;">
            <div class="card-body">
              <div class="p-4">
                <div class="text-center">
                  <h1 class="h4 mb-2" style="font-family:Abhaya Libre ExtraBold;color:#8D7B68;font-weight:bold;">Register</h1>
                </div>
                <form action="/create" method="POST" class="user">
                  @csrf
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                  <div class="form-group">
                    <label for="name" style="font-family:Ubuntu; color:#8D7B68;font-weight:bold;">Name</label>
                    <input name="name" type="text" class="form-control form-control-user" id="exampleInputUsername" style="border-radius:1rem;">
                  </div>
                  <div class="form-group">
                    <label for="email" style="font-family:Ubuntu; color:#8D7B68;font-weight:bold;">Email</label>
                    <input name="email" type="email" class="form-control form-control-user" id="exampleInputPassword" style="border-radius:1rem;">
                  </div>
                  <div class="form-group">
                    <label for="pwd" style="font-family:Ubuntu; color:#8D7B68;font-weight:bold;">Password</label>
                    <input name="password" type="password" class="form-control form-control-user" id="exampleInputPwd" style="border-radius:1rem;" aria-describedby="PwdHelp">
                  </div>
                  <div class="form-group">
                    <label for="Conpwd" style="font-family:Ubuntu; color:#8D7B68;font-weight:bold;">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control form-control-user" id="exampleInputConPwd" style="border-radius:1rem;" aria-describedby="ConPwdHelp">
                  </div>
                  <div class="form-group">
                    <label for="address" style="font-family:Ubuntu; color:#8D7B68;font-weight:bold;">Delivery Address</label>
                    <textarea name="address" class="form-control form-control-user" id="exmapleAddress" style="border-radius:1rem;" aria-describedby="addressHelp"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input name="remember" type="checkbox" class="custom-control-input" id="customCheck" style="background: #8D7B68">
                      <label class="custom-control-label" for="customCheck" style="color:#8D7B68;">Remember
                        my email and password</label>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-block btn-user text-white btn-hover" style="font-family:Abhaya Libre ExtraBold;font-weight:bold;width:120px;">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
  <div style="background-color:#8D7B68;width:100%;">
    <div class="row">
      <div class="col-md-8 col-lg-8" style="margin-top:58px;margin-left:25px; ">
        <h2 class="text-uppercase fw-bold" style="color:#F1DEC9;margin-bottom:18px;font-family:ubuntu">Craftsy</h2>
        <p style="color:#F1DEC9;font-family:ubuntu">About Us</p>
        <p style="color:#F1DEC9;font-family:ubuntu"><i class="fa fa-copyright"></i> Copyright Craftsy Inc., 2023</p>
      </div>

      <div class="col-md-3 col-lg-3" style="margin-top:32px; ">
        <h6 class=" fw-bold" style="color:#F1DEC9;margin-bottom:18px;font-family:ubuntu;">Contact Us</h6>

        <p style="color:#F1DEC9;font-family:ubuntu;margin-right:10px;"><i class="fa fa-instagram "></i>&nbsp&nbsp&nbsp New York, NY 10012, US</p>
        <p style="color:#F1DEC9;font-family:ubuntu;"><i class="fa-solid fa-voicemail "></i> &nbsp customerservice@craftsy.com</p>
        <p style="color:#F1DEC9;font-family:ubuntu;"><i class="fa fa-phone"></i> &nbsp&nbsp +62 123-4567-8910</p>
      </div>
    </div>
  </div>


  <script src="https://kit.fontawesome.com/4f5cb0884a.js" crossorigin="anonymous"></script>

  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>


  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>