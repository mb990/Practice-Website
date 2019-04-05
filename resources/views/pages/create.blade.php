@extends('layout.app')

@section('content')
<div class="container">
  <h1>Create Post</h1>
  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    {{ Form::bsText('title') }}
    {{ Form::bsTextArea('description') }}
    {{ Form::bsTextArea('content') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
  <a class="btn btn-info" href="/home">Go back</a>
</div>
@endsection

{{-- @section('content')
<div class="container">
 <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h3 class="text-info">Create new blog post</h3>

            </div>

            <div class="panel-body">
               {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
		    	{{ Form::bsText('title', '', ['placeholder' => 'Blog Title']) }}
		    	{{ Form::bsTextArea('content', '', ['placeholder' => 'Blog Content']) }}		    	
		    	{{ Form::bsSubmit('Create', ['class' => 'center-block btn btn-primary']) }}
			{!! Form::close() !!}
            <form action="/home/">
                    <input type="submit" value="Cancel" class="btn btn-default center-block"></input>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection --}}

