@extends('layouts.master')

@section('content')
@foreach ($products as $product)
<div class="col-md-4" style="padding-top: 20px">              
    <div class="card" style="width: 15rem;">
      <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ substr ($product->title , 0, 8)}}</h5>
        <p class="card-text">{{ number_format($product->price/100 ,2)}} €</p>
        <p class="card-text">{{ substr ($product->subtitle , 0, 30 )}}...</p>
        <a href="{{route('products.show',$product->slug)}}" class="btn btn-primary btn-sm">details</a>
      </div>
    </div>
</div>
@endforeach      
@endsection