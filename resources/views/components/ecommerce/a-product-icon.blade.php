<x-ecommerce.base.a {{ $attributes->class([])->merge(['href' => '#' , 'class' => 'btn btn-outline-dark btn-square']) }}>
{{ $slot }}
</x-ecommerce.base.a>