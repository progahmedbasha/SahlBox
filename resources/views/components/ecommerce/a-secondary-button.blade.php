<x-ecommerce.base.a {{ $attributes->class([])->merge(['href' => '#' , 'class' => 'btn secondary_button_color py-2 px-4 mt-3 animate__animated animate__fadeInUp']) }}>
{{ $slot }}
</x-ecommerce.base.a>