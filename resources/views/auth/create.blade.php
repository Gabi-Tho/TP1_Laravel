@extends('layouts.app')
@section('title', 'enregistrer')
@section('content')

<section class="vh-100">

<div class="container py-5 h-100">

<div class="row d-flex justify-content-center align-items-center h-80">

    <div class="col col-xl-20">

        <div class="card" style="border-radius: 1rem;">
        @if(session('success'))

          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>user has been created :)</strong> 
              <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close" data-bs-dismiss="alert">
              </button>
          </div>

        @endif

            <div class="card-body p-4 p-lg-5text-black">

                <form action="{{ route('user.store') }}" method="post">
                    @csrf 
                    @method('post')
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register</h5>

                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example17" class="form-control form-control-lg"  placeholder="name"/>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" class="form-control form-control-lg"  placeholder="email"/>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg"   placeholder="password"/>
                    </div>

                    <div class="pt-1 mb-4">
                      <input class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="register"></input>
                    </div>

                </form> 

            </div>
        </div>

    </div>
    
</div>

</div>

</section>


@endsection