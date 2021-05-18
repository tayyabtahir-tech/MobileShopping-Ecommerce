@extends('index')
@section('content')
<table class="table">
  <tbody>
   <tr>
   	<td>Total</td>
   	<td>Rupees</td>
   </tr>
   <tr>
   	<td>Tax</td>
   	<td>0</td>
   </tr>
   <tr>
   	<td>Delivery Charges</td>
   	<td>200</td>
   </tr>
   <tr>
   	<td class="table-dark"   >Total Amount</td>
   	<td class="table-dark">{{$total+200}}</td>
   </tr>
  </tbody>
</table>
<form action="/orderplace" method="POST">
	@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address:</label>
    <textarea name="address"  class="form-control">
    	
    </textarea>
  </div>
  <div class="mb-3 form-check">
    <label><input type="radio" name="payment" value="Online payment"> Online Payment</label>
    <br>
    <label><input type="radio" name="payment" value="Cash on Delivery"> Cash on Delivery</label>
  </div>
 &nbsp;&nbsp; <button type="submit" class="btn btn-danger">Submit</button>
</form>
@endsection