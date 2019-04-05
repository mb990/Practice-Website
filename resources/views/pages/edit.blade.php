@extends('layout.app')

@section('content')
<div class="container">
    {{-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"> --}}
                <a class="btn btn-default center-block" href="/home">Back</a>
                <div class="card-heading text-center"><h3 class="text-info">Edit post</h3>
    
                </div>
    
                <div class="card-body">
                   {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}   
                    {{ Form::bsText('title', $post->title, ['placeholder' => 'Post Title']) }}
                    {{ Form::bsTextArea('description', $post->description, ['placeholder' => 'Post description here']) }}
                    {{ Form::bsTextArea('content', $post->content, ['placeholder' => 'Post content here']) }}
                    {{ Form::hidden('_method', 'PUT') }}            
                    {{ Form::bsSubmit('Confirm', ['class' => 'btn btn-primary center-block']) }}
                {!! Form::close() !!}
                    <form action="/home/">
                        <input type="submit" value="Cancel" class="btn btn-default center-block"></input>
                    </form>
                </div>
            {{-- </div>
        </div>
    </div> --}}
</div>
 
@endsection