@extends('index')
@section('content')
<table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Products</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Payment Status</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($collection as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td><img class="table-image" src="{{$item->gallery}}"></td>
      <td>{{$item->name}}</td>
      <td>{{$item->status}}</td>
      <td>{{$item->payment_method}}</td>
      <td>{{$item->payment_status}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection