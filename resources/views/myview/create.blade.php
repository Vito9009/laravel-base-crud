@extends('layouts.testlayout')

@section('content')
    <div class="container">
        <h3 class="text-center my-5">Inserisci un nuovo fumetto</h3>

        <form action="{{route("myview.store")}}" method="POST">

            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" placeholder="Nome del fumetto" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descrizione del fumetto"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Thumb</label>
                <input class="form-control" type="text" placeholder="Immagine copertina del fumetto" id="thumb" name="thumb">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input class="form-control" type="number" placeholder="Prezzo del fumetto" id="price" name="price">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Series</label>
                <input class="form-control" type="text" placeholder="Serie del fumetto" id="series" name="series">        
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Sale date</label>
                <input class="form-control" type="text" placeholder="Data di uscita del fumetto" id="sale_date" name="sale_date">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input class="form-control" type="text" placeholder="Categoria del fumetto" id="type" name="type">        
            </div>

            <div class="text-center">
                <button type="button" class="btn btn-secondary my-5 text-center">Aggiungi il prodotto</button>
            </div>
        </form>
    </div>

@endsection