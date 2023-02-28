@extends('layouts.app')

@section('content')



<div class="container mt-5">
    
    <h3>@lang('lang.contribute_msg_1')</h3>
    
    <hr>
    <form method="post" action="{{route('forum.store')}}">
    @csrf
      <div class="form-group pt-3">
        <input type="text" class="form-control" id="title" name="title" placeholder="@lang('lang.input_title')">
      </div>

      <div class="form-group pt-3">
        <textarea class="form-control" id="article" rows="3" name="article" placeholder="@lang('lang.input_article')"></textarea>
      </div>

      <div class="form-group pt-3">
          <input type="submit" value="@lang('lang.submit')" >
      </div>

    </form>
    <hr>
</div>


<div class="container mt-5">

<h3>@lang('lang.view_user_articles')</h3>
    
<hr>


    <div class="container mt-5">
@foreach($articles as $article)
      <div class="row pt-2">
        <div class="col">
            <div class="card">

              <div class="card-header">
                <p>@lang('lang.title_label'): {{ $article->title }}</p>
              </div>

              <div class="card-body">
                <p>@lang('lang.message_label'):</p>
                <p>{{ $article->article }}</p>

                <button><a href="{{route('forum.edit', $article->id)}}">@lang('lang.edit')</a></button>

                
              </div>
            </div>
        </div>
      </div>
@endforeach
    </div>

</div>



@endsection