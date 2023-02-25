@extends('layouts.app')


@section('content')



<section class="vh-60" style="background-color:#1aaf00">
  <div class="container py-5 h-60" >
    <div class="row d-flex justify-content-center align-items-center h-60">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block img-fluid" style="background-color:#1aaf00">
              <img src="{{ asset('css/img/alien_standsmall.png')}}"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color:#1aaf00">
              <div class="card-body p-4 p-lg-5 text-black" style="background-color:#1aaf00">

                <form action="{{route('user.auth')}}" method="post">
                @csrf
                
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Login</span>
                  </div>
                  @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> {{session('success')}}</strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                  @endif

                  @if($errors)
                  <ul>
                    @foreach($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                  </ul>
                    @endforeach
                  @endif

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your accountz</h5>
                  <div class="form-outline mb-4">
                  @if($errors->has('email'))

                  <div class="text-danger mt-2">
                      {{ $errors->first('email')}}
                  </div>
                  @endif

                    <input type="email" id="email" class="form-control form-control-lg" name="email"/>
                    <label class="form-label" for="form2Example17">Email address</label>

                  </div>

                  <div class="form-outline mb-4">
                    
                  @if($errors->has('password'))
                  <div class="text-danger mt-2">
                      {{ $errors->first('password')}}
                  </div>
                  @endif

                    <input type="password" id="password" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="form2Example27">Password</label>

                  </div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" type="submit" value="please just work"></input>
                  </div>


                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection