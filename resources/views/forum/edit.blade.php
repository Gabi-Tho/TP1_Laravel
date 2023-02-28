@extends('layouts.app')

@section('content')


<div class="container mt-5">

      <form method="post" >
                    @csrf
                    @method('put')

        <div class="row pt-2">
          <div class="col">
              <div class="card">

                <div class="card-header  text-center">
                  <p>Title</p>
                  <input type="text" id="title" name="title" value="" placeholder="{{ $article->title }}">

                </div>

                <div class="card-body  text-center">
                  <p>Your message:</p>
                  <div class="form-group text-center">
                    <textarea id="article" name="article" >{{ $article->article }}</textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="edit" class="">
                    <button type="button"  data-bs-toggle="modal" data-bs-target="#deleteModal">Effacer</button> 
                  </div>
                </div>
                
              </div>
          </div>
        </div>

      </form>

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
        <form action="{{ route('forum.edit', $article->id) }}" method="post">
                @csrf
                @method('delete')
            <input type="submit" class="btn btn-danger" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>




@endsection