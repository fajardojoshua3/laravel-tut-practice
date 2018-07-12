@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/posts"> << Go Back</a>
    <h1>{{$post->title}}</h1>
    <p>{!!$post->body!!}</p>
    <hr>
    <small>{{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">EDIT</a>
    {{-- <a href="/posts/{{$post->id}}/delete" class="btn btn-warning">DELETE</a> --}}
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' =>  'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger' ])}}
    {!!Form::close()!!}
@endsection