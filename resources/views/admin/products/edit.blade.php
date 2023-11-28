@extends('admin.layouts.master')
@section('content')
<!-- Nav Header Component Start -->
<x-dashboard.base.nav>
    <x-slot:heading>
        الطلاب
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
                            <h4 class="card-title">الطلاب</h4>
                        </div>
                    </div>
                    <div class="card-body px-3">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">تعديل بيانات طالب</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac
                                        venenatis mollis, diam nibh finibus leo</p> --}}
                                    <form action="{{route('products.update',$product->id)}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group">
                                            <label class="form-label">اسم المنتج :</label>
                                            <input type="text" class="form-control" placeholder="الاسم" name="type"
                                                value="{{ $product->type }}" required />
                                            @error('type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"> السعر:</label>
                                            <input type="text" class="form-control" placeholder="السعر" name="price"
                                                value="{{ $product->price }}" required />
                                            @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"> البلد :</label>
                                            <select class="form-control" name="country_id">
                                                <option value="">البلد</option>
                                                @foreach ($countries as $country)
                                                <option value="{{$country->id}}" {{($product->country_id ==
                                                    $country->id)?'selected':''}}>
                                                    {{$country->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('country_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"> الوزن:</label>
                                            <input type="text" class="form-control" placeholder="الوزن" name="weight"
                                                value="{{ $product->weight }}" required />
                                            @error('weight')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
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
    </div>
</div>

@endsection