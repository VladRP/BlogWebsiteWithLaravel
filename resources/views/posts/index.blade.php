@extends('layouts.app')

@section('content')

    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="card" style="width:100%;">
            <h2 clqss="card-title">{{$post->title}}<h2>
            <p style="font-size:20px">{{$post->body}}</p>
            <small class="text-muted" style="font-size:12px">Written on {{$post->created_at}} by {{$post->user->name}}</small><br>
            <a class="btn btn-secondary" href="posts/{{$post->id}}">Read</a>
        </div>
        @endforeach
        {{$posts->links("pagination::bootstrap-4")}}
    @else
        <p>No posts found</p>
    @endif
@endsection