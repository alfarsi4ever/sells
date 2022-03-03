@extends('inc.navbar')
@section('content')


<h1>Create</h1>
<a class="btn btn-color-danger"href="/post">Back</a>

{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store','method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}

    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('Body','',['class'=>'form-control','placeholder'=>'Body text'])}}

    </div>
    <div class="form-group">
        {{Form::label('image','Image')}}
        {{Form::text('Image','',['class'=>'form-control','placeholder'=>'Image URL'])}}

    </div>
    
<!-- 
    <input type="file" id="image_input">

<div id="display_image"></div>

<script src="C:\Users\pc\Desktop\project\sells\sells\resources\js\image.js"></script> -->
    <br>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!} 
@endsection