@extends('layouts.testlayout')

@section('content')
    <div class="container text-center my-5">
        <h3>{{$comic->title}}</h3>
        <img class="my-5" src="{{$comic->thumb}}" alt="">
        <p>{{$comic->description}}</p>
    </div>
@endsection