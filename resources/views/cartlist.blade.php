@extends('index')
@section('content')
<table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Products</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col"><a href="ordernow" class="btn btn-success">Order Now</a> </th>
    </tr>
  </thead>
  <tbody>
  	@foreach($product as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td><img class="table-image" src="{{$item->gallery}}"></td>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->price}}</td>
      <td><a href="removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection