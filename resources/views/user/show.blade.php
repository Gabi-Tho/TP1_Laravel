@extends('layouts.app')

@section('content')


<div class="container mt-5">
    
    <h3>contribute to our forum</h3>
    
    <hr>
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </form>
    <hr>
</div>

@endsection