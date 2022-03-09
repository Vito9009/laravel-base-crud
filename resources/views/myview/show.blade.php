@extends('layouts.testlayout')

@section('content')
    <div class="container text-center my-5">
        <h3>{{$comic->title}}</h3>
        <img class="my-5" src="{{$comic->thumb}}" alt="">
        <p>{{$comic->description}}</p>
        <a href="{{route("myview.index")}}"><button type="button" class="btn btn-secondary my-5">Back to the products page</button></a>
    </div>
@endsection