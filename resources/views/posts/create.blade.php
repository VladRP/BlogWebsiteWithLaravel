@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST'] ) !!}
        <div class="form-group">
            
            {{Form::label('title', 'Title',)}}
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder' => 'Title'])}}
            
        </div>
        <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['class' =>'form-control', 'placeholder' => 'type your post here...'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-secondary', ])}}
    {!! Form::close() !!}
@endsection

