@extends('inc.navbar')
@section('content')

    <a class="btn btn-danger"href="/post">Back</a>
    <h1>{{$posts->title}}</h1>
    <br>
    <h3>{{$posts->body}}</h3>
    <br>
    <h3><img src="{{$posts->image}}"class="img-thumbnail"width="500" height="600" alt=""></h3>
    <a href="/post/{{$posts->id}}/edit" class = "btn btn-primary btn-sm">Edit</a>

    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$posts->id],'method'=>'POST','class'=>'pull-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!} 
    <!-- <h1>this is index page</h1> -->
@endsection