@extends('layouts.app')
@section('title', 'My Orders')
@section('content')
<hr>
<div class="container page-container">
   @if(Session::has('checkout_process'))
   <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{!! session('checkout_process') !!}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
   </div>
   @endif
   @if($orders->count() > 0)
   <div class="row">
      <div class="col-md-6">
         <h4>My Orders</h4>
      </div>
      <div class="col-md-6">
         <a href="{{ route('order_page') }}" class="btn btn-success float-md-right">New Order</a>
      </div>
      <div class="col-md-12">
         <hr>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-8">
         @foreach ($orders as $key=>$order)
         @include('my_account.partials.order_list_row')
         @endforeach
      </div>
   </div>
   {{ $orders->links() }}
   @else
   <div class="row">
      <div class="offset-md-3 col-md-6 place-first-order">
         <div class="d-flex flex-column justify-content-center">
            <img class="img-fluid" src="{{ asset('images/order.svg') }}">
            <h5 class="text-center">Place your first order</h5>
            <br><br><br>
            <a href="{{ route('order_page') }}" class="btn btn-success btn-lg btn-block">Order Now</a>
         </div>
      </div>
   </div>
   @endif
</div>
@endsection