@extends('layouts.app')

@section('content')
        <a href="/BlogWebsite/public/posts">Go Back</a>
        <h3>{{$post->title}}<h3>
        <div>{{$post->body}} </div>
        <small>{{$post->created_at}}</small>
        @if(!Auth::guest())
                @if(Auth::user()->id==$post->user->id)
                <a href="/BlogWebsite/public/posts/{{$post->id}}/edit">Edit</a>

                {!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $post->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => ''])}}
                {!!Form::close()!!}
                @endif
        
        @endif
@endsection