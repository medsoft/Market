@extends('layouts.master')

@section('content')
@if (Cart::count() > 0)
    
<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>Panier</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                    <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($products as $item)
                <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="{{ $item->image }}" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark">Product {{$item->id}}</a>
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">{{ number_format($item->price /100 , 2)}}</td>
                    <td class="align-middle p-4"><input type="text" class="form-control text-center" value="{{$item->qty}}"></td>
                    <td class="text-right font-weight-semibold align-middle p-4">{{ number_format($item->price * $item->qty /100 , 2)}} </td>
                    <td class="text-center align-middle px-0">
                        <form action="{{route('cart.destroy', $item->rowId)}}" method="Post">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">delete</button>
                        </form>
                </tr>
                @endforeach
                  
        
        
                </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
        
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              <div class="mt-4">
                <label class="text-muted font-weight-normal">Promocode</label>
                <input type="text" placeholder="ABC" class="form-control">
              </div>
              <div class="d-flex">
                
                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Total price</label>
                  <div class="text-large"><strong>{{number_format(Cart::subtotal() / 100 ,2 ) }} €</strong></div>
                </div>
              </div>
            </div>
        
            <div class="float-right">
              <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
              <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
            </div>
        
          </div>
      </div>
  </div>    
@else
  <h4>Votre panier est vide </h4>
@endif
@endsection