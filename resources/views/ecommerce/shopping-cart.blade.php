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
<div class="container">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>shipping</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach ($products as $product)
                    <tr>
                        <td class="align-middle">{{ $product->type }}
                        </td>
                        <td class="align-middle">${{ $product->price }}</td>
                        <td class="align-middle">${{ $product->shipping_cost }}</td>
                        <td class="align-middle"><button class="btn btn-sm btn-danger"><i
                                    class="fa fa-times"></i></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-30" action="" method="post" enctype="multipart/form-data">
                @csrf
                <br>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart
                        Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>${{ $products->sum('price') }}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">${{ $products->sum('shipping_cost') }}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Vat</h6>
                            <h6 class="font-weight-medium">${{ $products->sum('vat') }}</h6>
                        </div>
                        @if(count($discounts) > 0)
                        <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Discounts :</h6>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="row">
                                @foreach ($discounts as $discount)
                                <h6 class="font-weight-medium">{{ $discount['message'] }}</h6>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>${{($products->sum('price') + $products->sum('shipping_cost') + $products->sum('vat')) -
                                $total_discount }}</h5>
                        </div>
                        <x-ecommerce.primary_button classattribute="btn-block font-weight-bold my-3 py-3" disabled>Proceed To
                            Checkout
                        </x-ecommerce.primary_button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Cart End -->
@endsection