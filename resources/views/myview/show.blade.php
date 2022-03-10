@extends('layouts.testlayout')

@section('content')
    <div class="container text-center my-5">
        <h3>{{$comic->title}}</h3>
        <img class="my-5" src="{{$comic->thumb}}" alt="">
        <h5>Link immagine:</h5>
        <p>{{$comic->thumb}}</p>
        <h5>Descrizione:</h5>
        <p>{{$comic->description}}</p>
        <a href="{{route("myview.index")}}"><button type="button" class="btn btn-secondary my-5">Back to the products page</button></a>
    </div>
@endsection

{{--
    @section('content')
    <div class="container text-center my-5">
        <h3>{{$myview->title}}</h3>
        <img class="my-5" src="{{$myview->thumb}}" alt="">
        <h5>Link immagine:</h5>
        <p>{{$myview->thumb}}</p>
        <h5>Descrizione:</h5>
        <p>{{$myview->description}}</p>
        <a href="{{route("myview.index")}}"><button type="button" class="btn btn-secondary my-5">Back to the products page</button></a>
    </div>
@endsection

Questa soluzione è valida quando nel controller viene impostato lo show in questo modo:

    public function show(Comic $myview)
    {

        return view('myview.show', compact('myview'));
    }

    ----------------------------
    Il 'myview' può essere verificato se corretto con il comando: php artisan route:list
--}}