@extends('layouts.testlayout')

@section('content')
<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th class="align-middle text-center" scope="col">ID</th>
        <th class="align-middle text-center" scope="col">Title</th>
        <th class="align-middle text-center" scope="col">Image</th>
        <th class="align-middle text-center" scope="col">Price</th>
        <th class="align-middle text-center" scope="col">Series</th>
        <th class="align-middle text-center" scope="col">Sale date</th>
        <th class="align-middle text-center" scope="col">Type</th>
        <th class="align-middle text-center" scope="col">Info</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($comics as $item)
            <tr>
                <th class="align-middle text-center" scope="row">{{$item["id"]}}</th>
                <td class="align-middle text-center">{{$item["title"]}}</td>
                <td class="align-middle text-center"><img src="{{$item["thumb"]}}" alt=""></td>
                <td class="align-middle text-center">{{$item["price"]}}€</td>
                <td class="align-middle text-center">{{$item["series"]}}</td>
                <td class="align-middle text-center">{{$item["sale_date"]}}</td>
                <td class="align-middle text-center">{{$item["type"]}}</td>
                <td class="align-middle text-center"><a href="{{route("myview.show", $item->id)}}"><button type="button" class="btn btn-secondary">Read More</button></a></td>
            </tr>
        @endforeach
    </tbody>
  </table>

  <a href="{{route("myview.create")}}"><button type="button" class="btn btn-secondary">Add comic</button></a>
@endsection