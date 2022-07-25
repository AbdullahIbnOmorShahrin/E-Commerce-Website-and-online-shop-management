@extends('home')
@section('content')

<div class="custom-product">
          <div class="col-sm-6">
            <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>{{$total}} Tk</td>
                  </tr>
                  <tr>
                    <td>Vat</td>
                    <td>0 Tk</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>60 tk inside Dhaka</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>{{$total+60}}</td>
                  </tr>
                </tbody>
              </table>

              <form method="POST" action="orderplace">
                @csrf
                <div class="form-group">
                  <textarea placeholder="enter yoyr address"  name="address" class="form-control" > </textarea>
                </div>
                <div class="form-group">
                    <label for="">Payment Method</label>
                    <p><input type="radio"  value="cash" name="payment"> <span>Bkash Payment</span>  </p>
                    <p><input type="radio"  value="cash"  name="payment"> <span>Card Payment</span>  </p>
                    <p><input type="radio" value="cash"  name="payment"> <span>Cash on Delivery</span>  </p>

                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
</div>
@endsection
