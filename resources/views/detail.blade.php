@extends('home')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img class="detail-img" src="{{$product['photo']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
        <h2>Name : {{$product['name']}}</h2>
        <h3>Price : {{$product['price']}}</h3>
        <h4>Category : {{$product['category']}}</h4>
        <h4>Description : {{$product['description']}}</h4>
        <br><br>
        <form action="/add_to_cart" method="POST">
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        @csrf
        <div class="form-outline">
            <input type="number" id="typeNumber" class="form-control" />
            <label class="form-label" for="typeNumber" style="color: blueviolet" value="10">Add Amount</label>
        </div>
        <br>
            <button class="btn btn-success">Add to Cart</button>
        </form>
        <br><br>
        <button class="btn btn-primary" >Buy Now</button>
        <br><br>

        </div>
    </div>
</div>
@endsection
<style>
    .form-control{
        width: 17% !important;
    }
    </style>
