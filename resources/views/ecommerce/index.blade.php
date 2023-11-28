@extends('ecommerce.layouts.master')
@section('content')
<!-- Breadcrumb Start -->
<div class="container">
   <div class="row px-xl-5">
      <div class="col-12">
         <nav class="breadcrumb bg-light mb-30">
            <a class="breadcrumb-item text-dark" href="#">Home</a>
            <a class="breadcrumb-item text-dark" href="#">Shop</a>
            <span class="breadcrumb-item active">Shopping Cart</span>
         </nav>
      </div>
   </div>
</div>
<!-- Breadcrumb End -->


<!-- Cart Start -->
<form class="mb-30" action="{{ route('add-cart') }}" method="post" enctype="multipart/form-data">
   @csrf
   <div class="container">
      <div class="row px-xl-5">
         <div class="col-lg-8 table-responsive mb-5">
            <label for="cars">Choose a Products:</label>
            <select name="product_id[]" class="form-control" multiple>
               @foreach ($products as $product)
               <option value="{{ $product->id }}">{{ $product->type }}</option>
               @endforeach
            </select>
            <x-ecommerce.primary_button classattribute="btn-block font-weight-bold my-3 py-3">Add to cart
            </x-ecommerce.primary_button>
         </div>
      </div>
   </div>
</form>
   <!-- Cart End -->
   @endsection