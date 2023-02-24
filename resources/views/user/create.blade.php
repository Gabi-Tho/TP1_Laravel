@extends('layouts.app')
@section('content')


<section class="vh-100" style="background-color: #9A616D;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block img-fluid">
              <img src="{{ asset('css/img/alien_standsmall.png')}}"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post" action="{{ route('user.store') }}">
                  @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Register</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">register or suffer the consequences</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="email"/>

                  </div>

                  <div class="form-outline mb-4 ">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="password" />
                  </div>

                  <div class="form-group ">
                      <select class="form-control mt-2" id="ville" name="ville_id" >
                        <option selected>choose your city</option>
                      @foreach($villes as $ville)
                        <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
                      @endforeach
                      </select>
                  </div>

                  <div class="pt-1 mb-4 pt-3">
                    <button class="btn btn-dark btn-lg btn-block" type="button">Register</button>
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