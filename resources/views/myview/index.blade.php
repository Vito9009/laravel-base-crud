@extends('layouts.testlayout')

@section('content')
<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Sale date</th>
        <th scope="col">Type</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $item)
            <tr>
                <th scope="row">{{$item["id"]}}</th>
                <td>{{$item["title"]}}</td>
                <td>{{$item["description"]}}</td>
                <td><img src="{{$item["thumb"]}}" alt=""></td>
                <td>{{$item["price"]}}€</td>
                <td>{{$item["series"]}}</td>
                <td>{{$item["sale_date"]}}</td>
                <td>{{$item["type"]}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection