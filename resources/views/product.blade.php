@extends('index')
@section('content')
<div id="slide">
	<div class="row">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
 
  <div class="carousel-inner">
  	@foreach($productdata as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
    	<center>
    		<a href="detail/{{$item['id']}}">
      <img class="slide-image" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
      </a>
      <div class="carousel-caption d-none d-md-block">
      	<a style="text-decoration:none;color: white;" href="detail/{{$item['id']}}">
        <h5>{{$item['name']}}</h5>
        <p>{{$item['description']}}</p>
    </a>
      </div>
      </center>
    </div>

    @endforeach
 
   
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon"  aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
</div>

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