@extends('layouts.app')

@section('content')
    <h1>Edite Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostController@update', $post->id], 'method' => 'POST'] ) !!}
        <div>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' =>'form-control', 'placeholder' => 'Title'])}}
        </div>
        {{Form::label('body', 'body')}}
        {{Form::textarea('body', $post->body, ['class' =>'form-control', 'placeholder' => 'type your post here...'])}}
        {{Form::hidden('_method', 'PUT')}}  
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-secondary', ])}}
    {!! Form::close() !!}
@endsection

