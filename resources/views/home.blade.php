@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <a href = "/BlogWebsite/public/posts/create" class="btn btn-secondary">Create Post</a>
                @if(count($posts) > 0)
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <th class="text-center">Title</th>
                        <th>Post</th>
                        <th>Actions</th>
                        
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            <td>{!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $post->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-rounded btn-sm my-0'])}}
                                {!!Form::close()!!}
                                <a href="/BlogWebsite/public/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    @else 
                        <p> You have no posts </p>
                    @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
