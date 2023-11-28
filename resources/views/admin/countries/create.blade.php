@extends('admin.layouts.master')
@section('content')
<!-- Nav Header Component Start -->
<x-dashboard.base.nav>
    <x-slot:heading>
        اضافة بلد
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
                            <h4 class="card-title">البلاد</h4>
                        </div>
                    </div>
                    <div class="card-body px-3">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">بيانات البلد</h4>
                                    </div>
                                </div>
                                    <form action="{{route('countries.store')}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                <div class="card-body">
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac
                                        venenatis mollis, diam nibh finibus leo</p> --}}
                                        <div class="form-group">
                                            <label class="form-label">اسم البلد :</label>
                                            <input type="text" class="form-control" placeholder="الاسم" name="name"
                                                value="{{ old('name') }}" required />
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label"> التقييم:</label>
                                            <input type="text" class="form-control" placeholder="التقييم" name="rate"
                                                value="{{ old('rate') }}" required />
                                            @error('rate')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
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

@endsection