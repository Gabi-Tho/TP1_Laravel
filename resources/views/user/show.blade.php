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
                <p>{{ $article->title }}</p>
              </div>

              <div class="card-body">
                <p>{{ $article->article }}</p>

                <button><a>suprimer</a></button>
                <button type="button"  data-bs-toggle="modal" data-bs-target="#deleteModal">Effacer</button>
                
                
              </div>
            </div>
        </div>
      </div>
@endforeach
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer un article</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Etes-vous certain de vouloir effacer cette donnée?
      </div>
      <div class="modal-footer">
        <form action="{{ route('forum.edit', $article->id)}}" method="post">
                @csrf
                @method('delete')
            <input type="submit" class="" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection