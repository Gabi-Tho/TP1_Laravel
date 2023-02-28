@extends('layouts.app')
@section('title', 'enregistrer')
@section('content')


<section class="vh-80" style="background-color: #1aaf00;">
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

              @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>@lang('lang.user_created')</strong> 
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close" data-bs-dismiss="alert">
                    </button>
                </div>

              @endif

                <form  action="{{ route('user.store') }}" method="post">
                  @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">@lang('lang.register')</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">@lang('lang.message_register')</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="@lang('lang.name')" />
                    @if($errors->has('name'))
                        <div class="text-danger mt-2">{{$errors->first('name')}}</div>
                    @endif
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="@lang('lang.email')" />
                    @if($errors->has('email'))
                      <div class="text-danger mt-2">{{$errors->first('email')}}</div>
                    @endif
                  </div>

                  <div class="form-outline mb-4 ">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="@lang('lang.password')" />
                    @if($errors->has('password'))
                      <div class="text-danger mt-2">{{$errors->first('password')}}</div>
                    @endif
                  </div>

                  <div class="pt-1 mb-4 pt-3">
                    <input class="btn btn-dark btn-lg btn-block" type="submit" value="@lang('lang.submit')" name="submit"></input>
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