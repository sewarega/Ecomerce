@extends('master')
@section("content")
<div class=" custom-product">
    <div class="col-sm-10">
    <table class="table">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
       
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
        
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
        
      </tr> <tr>
        <td>Total Amount</td>
        <td>$ {{$total+10}}</td>
        
      </tr>

    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="POST">
    @csrf
  <div class="form-group">
    
    <textarea name ="address" placeholder="enter your addreass" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Methode</label>  <br>  <br>
    <input type="radio" value="cash" name="payment"> <span>online payment</span> <br>  <br> <br>
    <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br>  <br>  <br>
    <input type="radio" value="cash" name="payment"> <span>payment on Delivery</span>  <br>  <br>  <br>
 
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Order Nowe</button>
  </div>
</form>
  </div>
</div>
</div>
@endsection