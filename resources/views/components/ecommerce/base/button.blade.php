<button {{ $attributes->class([])->merge(['type' => 'submit']) }}>
    {{ $slot }}
</button>