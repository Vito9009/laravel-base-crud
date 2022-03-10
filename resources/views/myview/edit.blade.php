@extends('layouts.testlayout')

@section('content')
    <div class="container">
        <h3 class="text-center my-5">Modifica il fumetto</h3>

        <form action="{{route('myview.update', $comic->id)}}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" placeholder="Nome del fumetto" id="title" name="title" value="{{$comic->title}}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descrizione del fumetto">{{$comic->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Thumb</label>
                <input class="form-control" type="text" placeholder="Immagine copertina del fumetto" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input class="form-control" type="number" step="0.01" placeholder="Prezzo del fumetto" id="price" name="price" value="{{$comic->price}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Series</label>
                <input class="form-control" type="text" placeholder="Serie del fumetto" id="series" name="series" value="{{$comic->series}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Sale date</label>
                <input class="form-control" type="text" placeholder="Data di uscita del fumetto" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input class="form-control" type="text" placeholder="Categoria del fumetto" id="type" name="type" value="{{$comic->type}}">        
            </div>

            <button type="submit" class="btn btn-secondary my-5 text-center">Salva modifiche</button>
        </form>
    </div>

@endsection