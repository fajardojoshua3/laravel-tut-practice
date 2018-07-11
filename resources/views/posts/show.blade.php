@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/posts"> << Go Back</a>
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <small>{{$post->created_at}}</small>
@endsection