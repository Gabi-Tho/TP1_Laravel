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
<body >

@php $locale = session()->get('locale'); @endphp


<h2 class="display-1 text-center ">@lang('lang.welcome') Maisonneuve</h2>

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="{{ route('user.index') }}">@lang('lang.home')</a>
              @guest
              <a  class="nav-link" href="{{ route('login') }}">@lang('lang.login')</a>
              <a  class="nav-link" href="{{ route('user.create') }}">@lang('lang.register')</a>
              @else
              <a  class="nav-link" href="{{ route('user.show') }}">@lang('lang.my_articles')</a>
              <a  class="nav-link" href="{{ route('forum.index') }}">@lang('lang.forum')</a>
              <a  class="nav-link" href="{{ route('logout') }}">@lang('lang.logout')</a>
              <a  class="nav-link" href="{{ route('upload.index') }}">upload</a>   
              @endguest
        
              <a  class="nav-link @if($locale == 'en') @endif" href="{{ route('lang', 'en') }}">EN</a>
              <a  class="nav-link" href="{{ route('lang', 'fr') }}">FR</a>

            </div>
          </div>
        <div>
    </nav>
  </div>
</div>

    @yield('content')





</div>

<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
  © 2020 Copyright:
  <a class="text-white" href="https://mdbootstrap.com/">@lang('lang.copyright_message')</a>
</div>

</footer>


</body>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </div>
</html>