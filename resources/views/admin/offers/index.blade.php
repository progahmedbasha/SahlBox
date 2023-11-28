@extends('admin.layouts.master')
@section('content')
<!-- Nav Header Component Start -->
<x-dashboard.base.nav>
    <x-slot:heading>
        العروض
        </x-slot>
        <x-slot:link>
            {{ route('offers.create') }}
            </x-slot>
</x-dashboard.base.nav>
<!-- Nav Header Component End -->
<!--Nav End-->
</div>
{{-- content --}}
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <iframe id="iframe" src="" style="display:none;"></iframe>
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">العروض</h4>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div class="table-responsive">
                            <table id="user-list-table" class="table table-striped" role="grid">
                                <thead>
                                    <tr class="ligth">
                                        <th class="text-center">#</th>
                                        <th>العرض </th>
                                        <th>نوع الخصم</th>
                                        <th>قيمة الخصم</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($offers as $index=>$offer)
                                    <tr>
                                        <td class="text-center">{{ $index+1 }}</td>
                                        <td>{{ $offer->offer_on }}</td>
                                        <td>{{ $offer->discount_lable }}</td>
                                        <td>{{ $offer->discount_value }}{{ $offer->discount_symbol }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $offers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function openmodle(url){
    document.getElementById("iframe").src=url;
  }
</script>
@endsection