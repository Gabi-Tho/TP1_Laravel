@extends('layouts.app')

@section('content')


<div class="container mt-5">

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
                <button type="button"  data-bs-toggle="modal" data-bs-target="#deleteModal">Effacer</button>             
              </div>
            </div>
        </div>
      </div>

</div>


<!---------------- Modal --------------->

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
        <form action="{{route('forum.store')}}" method="post">
                @csrf
                @method('delete')
            <input type="submit" class="" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>




@endsection