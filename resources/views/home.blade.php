@extends('layout.app')

@section ('title')
    Your Homepage
@endsection

@section ('subtitle')
    This is your dashboard where you can read, add, edit or delete your blog posts.
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h4>Dashboard</h4></div>

                <div class="card-body">
                    <p class="lead text-center">You are logged in!</p>
                        <a href="/blog/posts/create" class="btn btn-primary">Create Post</a><br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 class="text-center">Your Posts</h3>
                    @if (count($posts))
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Created at</th>
                            <th>Actions</th>
                         @foreach ($posts as $post)
                        <tr>
                        <td><a href = "/blog/posts/{{$post->id}}">{{$post->title}}</a></td>
                            <td>{{$post->user['name']}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::bsSubmit('Delete', ['class' => 'float-right btn btn-xs btn-danger']) }}
                                {!! Form::close() !!}</a>
                                <a href="/blog/posts/{{$post->id}}/edit" class=" float-right btn btn-xs btn-info">Edit</a>
                                {{-- <a href="/blog/posts/{{$post->id}}" class=" float-right btn btn-xs btn-default">View</a> --}}
                            </td>
                        </tr>

                         @endforeach

                        </tr>

                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
