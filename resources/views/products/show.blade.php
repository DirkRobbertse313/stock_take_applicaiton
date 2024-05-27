@extends('layouts.app')

@section('content')


<div class="card" style="width: 18rem;">
  <img src="{{asset('images/no-image.png')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title"><h5>Product Name:</h5> {{$product->name}}</h4>
    <p class="card-text"><h5>Product Description:</h5>{{$product->description}}</p>
    <h5 class="card-title"><h5>Product Quantity:</h5>{{$product->quantity}}</h5>
    <h5 class="card-title"><h5>Product Price:</h5>{{$product->price}}</h5>
    <h6 class="card-title"><h5>Product Sku:</h5>{{$product->sku}}</h6><br>
  </div>
  <a href="{{route('product.index')}}" class="btn btn-primary mt-5">Go Back</a>
</div>

@endsection