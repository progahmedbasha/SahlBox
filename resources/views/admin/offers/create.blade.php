@extends('admin.layouts.master')
@section('content')
<!-- Nav Header Component Start -->
<x-dashboard.base.nav>
    <x-slot:heading>
        اضافة عرض
        </x-slot>
        {{-- We are on a mission to help developers like you build successful projects for FREE. --}}
</x-dashboard.base.nav>
<!-- Nav Header Component End -->
<!--Nav End-->
</div>
{{-- content --}}

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">العروض</h4>
                        </div>
                    </div>
                    <div class="card-body px-3">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">بيانات العرض</h4>
                                    </div>
                                </div>
                                <form action="{{route('offers.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac
                                        venenatis mollis, diam nibh finibus leo</p> --}}
                                        <label class="form-label"> نوع الخصم :</label>
                                        <div class="form-group">
                                            @foreach(\App\Enums\DiscountTypeEnum::cases() as $i => $type)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="discount_type"
                                                    value="{{ $type->value }}" {{ ($i==0)?'checked':'' }}>
                                                <label class="form-check-label" for="value2">{{ $type->name }}</label>
                                            </div>
                                            @endforeach
                                            <div class="form-check form-check-inline">
                                                <input type="text" class="form-control" placeholder="قيمة الخصم"
                                                    name="discount_value" required />
                                            </div>
                                        </div>
                                        <label class="form-label">تطبيق العرض علي ؟</label>
                                        <div class="form-group">
                                            @foreach(\App\Enums\ItemTypeEnum::cases() as $i => $type)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="item_type"
                                                    value="{{ $type->value }}" {{ ($i==0)?'checked':'' }}@if ($i==1 )
                                                    onclick="myFunction()" @endif>
                                                <label class="form-check-label" for="type2">{{ $type->name }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="form-group" id="product_div" style="display: none;">
                                            <label class="form-label"> المنتج :</label>
                                            <select class="form-control" name="offer_product_id">
                                                <option value="">اختر منتج</option>
                                                @foreach ($products as $product)
                                                <option value="{{$product->id}}">
                                                    {{$product->type}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <hr>
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h4 class="card-title">تطبيق قاعدة للخصم ؟</h4>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="has_rule"
                                                    id="inlineRadio1" value="1" checked>
                                                <label class="form-check-label" for="inlineRadio1">لا</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="has_rule"
                                                    id="inlineRadio2" value="2" onclick="blockFunction()">
                                                <label class="form-check-label" for="inlineRadio2">نعم</label>
                                            </div>
                                        </div>
                                        <div id="div" style="display: none;">
                                            <div class="form-group">
                                                <label class="form-label"> ادخل عدد المنتجات </label>
                                                <input type="text" class="form-control" placeholder="عدد المنتجات"
                                                    name="item_count" />
                                            </div>
                                            <div class="header-title">
                                                <h4 class="card-title">تطبيق علي الكل ؟ ام منتجات محدده ؟ </h4>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="is_specific"
                                                        id="inlineRadio1" value="1" checked>
                                                    <label class="form-check-label" for="inlineRadio1">الكل</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="is_specific"
                                                        id="inlineRadio2" value="2" onclick="spicificFunction()">
                                                    <label class="form-check-label" for="inlineRadio2">محدد</label>
                                                </div>

                                                <div class="form-group" id="product_spicific" style="display: none;">
                                                    <label class="form-label"> المنتجات :</label>
                                                    <select class="form-control" name="products_id[]" multiple>
                                                        <option value="">اختر المنتجات</option>
                                                        @foreach ($products as $product)
                                                        <option value="{{$product->id}}">
                                                            {{$product->type}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <button type="submit" class="btn btn-primary">حفظ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.offers.blocks-script')
@endsection