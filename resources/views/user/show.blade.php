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

@endsection