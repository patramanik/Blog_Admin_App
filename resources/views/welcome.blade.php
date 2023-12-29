<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Lora:ital,wght@1,600&family=Raleway:wght@600&family=Roboto+Mono&family=Roboto+Slab&display=swap"
    rel="stylesheet">
</head>

<body class="antialiased bg-light">
    {{-- <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav> --}}
    <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand">
            <img src="{{asset('assets/img/logo_biologyLearner.png')}}" alt="" width="130" height="40">
          </a>
        </div>
    </nav>

  <section>
    <div class="card m-5 shadow">
      <div class="container ">
        <!-- for left -->
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 col-xxl-6 card-body">
            <img src="{{ asset('assets/img/welcome.jpg')}}" class="img-fluid  " style="width: 30rem;">
          </div>
          <!-- for right side image -->
          <div class="col-sm-12 col-md-6 col-lg-6 col-12   card-body  ">

            <div class="col   text-lg-center p-3 mb-2">
              <img src="{{ asset('assets/img/biology.png')}}" class="img-fluid  cust_img text-center" style="width: 6rem;">
            </div>
            <div class="text-lg-center  h-50">
              <div class="css-typing ">
                <h1><strong>W</strong>elcome to </h1>
                <h1 class="text-success">
                  <strong>Biology learner.</strong>
                </h1>
              </div>
            </div>
            @if (Route::has('login'))
                <div class="text-lg-center my-4">
                @auth
                <a href="{{ url('/dashboard') }}"><button type="button" class="btn btn-outline-primary mx-3 "> <strong>Dashboard</strong></button></a>

                @else
                    <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-primary mx-3 "> <strong>Login</strong></button></a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"><button type="button" class="btn btn-outline-primary"><strong>Register</strong></button></a>
                    @endif
                @endauth

                </div>
            @endif

          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
