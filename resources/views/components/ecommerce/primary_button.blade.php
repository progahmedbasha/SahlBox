
@props(['classattribute' => 'px-3'])
<x-ecommerce.base.button {{ $attributes->class([])->merge(['type' => 'submit', 'class' => 'btn btn-primary primary_button_color ' . $classattribute]) }}>
{{ $slot }}
</x-ecommerce.base.button>