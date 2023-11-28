{{-- <a class="btn btn-outline-dark btn-square">
    <button {{ $attributes->class([])->merge(['type' => 'submit' , 'class' => 'btn btn-outline-dark btn-square']) }}>
    {{ $slot }}
    </button>
</a>
<a class="btn btn-outline-dark btn-square" href="{{ route('add-favorite', $product->id ) }}"><i class="far fa-heart"></i></a> --}}
<x-ecommerce.base.a {{ $attributes->class([])->merge(['href' => '#' , 'class' => 'btn btn-outline-dark btn-square']) }}>
{{ $slot }}
</x-ecommerce.base.a>