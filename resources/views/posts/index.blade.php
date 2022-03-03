@extends('inc.navbar')
@section('content')
    <h2>Posts Page </h2>
    @if(count($posts)>0)
    <div class="featured">
    <ul class="clearfix">
        @foreach($posts as $post)
                <li>
					<div class="frame1">
						<div class="box">
							<a href="/post/{{$post->id}}" ><img class="mx-2 my-2"src="{{$post->image}}" alt="Img" height="130" width="197"></a>
                            <h3><a style="text-decoration:none;color: green; font-size: 20px;" href="/post/{{$post->id}}">{{$post->title}} • {{$post->user->name}}</a></h3>
						</div>
					</div>
                    <br>
				</li>
        @endforeach
    </ul>
</div>
    @else
        <p>no Post available</p>
    @endif




    <!-- @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card";>
                <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
                <small>{{$post->body}}<</small>
            </div>
            <br>
        @endforeach
        {{$posts->links()}}
    @else
        <p>no Post available</p>
    @endif -->
    <!-- <h1>this is index page</h1> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection