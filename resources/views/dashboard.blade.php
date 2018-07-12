@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary pull-right">Create Post</a>
                    <h3>Your Post(s)</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td class="strong">{{ $post->title }} </br> <small><i> Created at {{$post->created_at}}</i></small> </td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' =>  'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger' ])}} <i class="glyphicon glyphicon-trash"></i>
                                    {!!Form::close()!!}
                                </td>
                            @endforeach
                    @else
                            <p class="alert alert-info">You have not posted anything yet.</p>   
                    @endif
                            </tr>
                        </table>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
