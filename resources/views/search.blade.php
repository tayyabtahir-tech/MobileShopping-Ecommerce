@extends('index')
@section('content')
<div class="trending-wrapper">
	<h1>Trending Products</h1>
  	@foreach($productdata as $item)
  	<a href="detail/{{$item['id']}}">
    <div class="trending-item">
      <img class="trending-image" src="{{$item['gallery']}}" alt="...">
      <div class="trending-item-name">
        <h5>{{$item['name']}}</h5>
      </div>
    </div>
    </a>
    </div>
    @endforeach
@endsection