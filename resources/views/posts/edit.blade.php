@extends('inc.navbar')
@section('content')


<h1>Create</h1>
<a class="btn btn-default btn-color-dark"href="/posts">Back</a>

{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update',$posts->id],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$posts->title,['class'=>'form-control','placeholder'=>'Title'])}}

    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('Body',$posts->body,['class'=>'form-control','placeholder'=>'Body text'])}}

        <div class="form-group">
        {{Form::label('image','Image')}}
        {{Form::text('Image',$posts->image,['class'=>'form-control','placeholder'=>'Image URL'])}}

    </div>

    </div>
    {{Form::hidden('_method','PUT')}}
    <br>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!} 
@endsection