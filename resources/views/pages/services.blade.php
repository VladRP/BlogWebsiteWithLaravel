@extends('layouts.app')

@section('content')

    <h1> Services</h1>
    <p> This is the services page<p>
    @if(count($services)> 0)
        <ul>
            @foreach($services as $service)
                <li>{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection