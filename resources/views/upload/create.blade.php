

@extends('layouts.app')

@section('content')


<div class="container">

    <div style="height: 120px;">
      <b-card no-body class="text-center" style="height: 100%;">
        <div class="text-light" style="height: 120px;">
            <div class="container text-center pt-4">
            <h1 class="display-1 ">create</h1>
            </div>
        </div>
      </b-card>
    </div>

    <form method="post" action="{{route('upload.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            Form
        </div>
        <div class="card-body">
            <div class="control-group col-12">
                <label for="title">Title of the file</label>
                <input type="text" id="title" name="title" class="form-control">
                <input type="file" name="upload">
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Save" class="btn btn-success">
        </div>
    </form>


</div>



@endsection


