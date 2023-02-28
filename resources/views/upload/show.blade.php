@extends('layouts.app')

@section('content')


<div class="container">

    <div style="height: 120px;">
      <b-card no-body class="text-center" style="height: 100%;">
        <div class="text-light" style="height: 120px;">
            <div class="container text-center pt-4">
            <h1 class="display-1 ">show</h1>
            </div>
        </div>
      </b-card>
    </div>

</div>


<div class="container mt-5">
      <div class="row">
        <div class="col">
            <div class="card">

              <div class="card-header">
                <p>title: {{ $upload->title }}</p>
                <p>author: {{ $upload->uploadHasUser->name}}</p>
              </div>

            </div>
        </div>
      </div>
</div>



@endsection


