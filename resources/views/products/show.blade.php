@extends('layouts.master')

@section('content')
<div class="row" style="padding-top: 50px">
    <div class="col-md-4">
      <img class="img-fluid" src="{{$product->image}}" alt="">
    </div>
    <div class="col-md-8">
      <h3 class="my-3">{{$product->title}}</h3>
      <p>{{$product->description}}</p>
      <h3 class="my-3">{{ number_format($product->price/100 ,2)}} €</h3>
      <form action="{{ route('cart.store') }}" method="Post">
        @csrf
        <input type="hidden" name="id"  value="{{$product->id}}">
        <input type="hidden" name="title" value="{{$product->title}}">
        <input type="hidden" name="price" value="{{$product->price}}">
       
        <input type="submit" class="btn btn-primary btn-sm" value="Ajouter au panier" >
      </form>
    </div>
  </div>   
@endsection