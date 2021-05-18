@extends('index')
@section('content')

<div class="container my-5 login-form">
	<div class="row ">
		
			<form action="login" method="POST">
				@csrf
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email address</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			    
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>

			
		
		
	</div>

</div>

@endsection