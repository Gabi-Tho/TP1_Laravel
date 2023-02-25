@extends('layouts.app')

@section('content')


<div class="container mt-5">
    
    <h3>contribute to alien contact</h3>
    
    <hr>
    <form method="post" action="{{route('forum.store')}}">
    @csrf
      <div class="form-group pt-3">
        <input type="text" class="form-control" id="title" name="title" placeholder="title for the alien message">
      </div>

      <div class="form-group pt-3">
        <textarea class="form-control" id="article" rows="3" name="article" placeholder="write to the aliens"></textarea>
      </div>

      <div class="form-group pt-3">
          <input type="submit" value="submit" >
      </div>

    </form>
    <hr>
</div>


<div class="container mt-5">

<h3>Things I wrote for the aliens</h3>
    
<hr>


    <div class="container mt-5">
@foreach($articles as $article)
      <div class="row pt-2">
        <div class="col">
            <div class="card">

              <div class="card-header">
                <p>Title: {{ $article->title }}</p>
              </div>

              <div class="card-body">
                <p>Your message:</p>
                <p>{{ $article->article }}</p>

                <button><a href="{{route('forum.edit', $article->id)}}">edit</a></button>

                
              </div>
            </div>
        </div>
      </div>
@endforeach
    </div>

</div>



@endsection