

@extends('layouts.app')

@section('content')


<div class="container">

    <div style="height: 120px;">
      <b-card no-body class="text-center" style="height: 100%;">
        <div class="text-light" style="height: 120px;">
            <div class="container text-center pt-4">
            <h1 class="display-1 ">FORUM</h1>
            </div>
        </div>
      </b-card>
    </div>


@foreach($articles as $article)
    <div class="container mt-5">

      <div class="row">
        <div class="col">
            <div class="card">

              <div class="card-header">
                <p>{{ $article->title }}</p>
              </div>

              <div class="card-body">
                <p>{{$article->article }}</p>
              </div>

            </div>
        </div>
      </div>

    </div>
@endforeach

</div>



@endsection


