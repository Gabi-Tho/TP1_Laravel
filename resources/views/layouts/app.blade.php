<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TP1 Gabi</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet"> 
</head>
<body>
@php $locale = session()->get('locale'); @endphp
<div class="card bg-dark text-white " style="height: 18rem;">
  <img class="" style="height: 18rem;" src="{{ asset('css/img/alienBanner.jpg')}}"> 
  <div class="card-img-overlay h-20">
    <h1 class="display-1 ">@lang('lang.welcome') Maisonneuve</h1>
    <p class="lead">https://github.com/Gabi-Tho/TP_1</p>
    <nav class="position-absolute bottom-0 p-2 display-6">
      <a  class="text-decoration-none btn btn-light " href="{{ route('user.index') }}"><p>@lang('lang.home')</p></a>
      <a  class="text-decoration-none btn btn-light" href="{{ route('user.show') }}">FORUM</a>
      <a  class="text-decoration-none btn btn-light" href="{{ route('login') }}">LOGIN</a>
      <a  class="text-decoration-none btn btn-light" href="{{ route('user.create') }}">REGISTER</a>

      <a  class="text-decoration-none btn btn-light p-3 @if($locale == 'en') @endif" href="{{ route('lang', 'en') }}">EN</a>
      <a  class="text-decoration-none btn btn-light p-3" href="{{ route('lang', 'fr') }}">FR</a>
    </nav>
  </div>
</div>

    @yield('content')

<!-- <footer class="text-center text-white fixed-bottom bg-dark mt-4" >

<div class="container">

  <section class="mt-1">

    Grid row-->
    <!-- <div class="row text-center d-flex justify-content-center pt-5"> -->
      <!-- Grid columns-->
      <!-- <div class="col-md-2">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" class="text-white">Contact</a>
        </h6>
      </div>

      <div class="col-md-2">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" class="text-white">Testimonials</a>
        </h6>
      </div>

      <div class="col-md-2">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" class="text-white">Schedule</a>
        </h6>
      </div>

      <div class="col-md-2">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" class="text-white">Careers</a>
        </h6>
      </div>

      <div class="col-md-2">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" class="text-white">About</a>
        </h6>
      </div>

    </div>

  </section> -->


  <hr class="my-4" />

  <!-- <section class="mb-2">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-8">
        <p>
          every human being is an artist
        </p>
      </div>
    </div>
  </section> -->


</div>

<!-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
  © 2020 Copyright:
  <a class="text-white" href="https://mdbootstrap.com/">Gabi Teaches Music Lessons</a>
</div>

</footer> -->


</body>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>