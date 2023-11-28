@props(['value'])
@if($value)
<textarea {{ $attributes->class([])->merge(['rows' => '8', 'class' => 'form-control', 'name' => '#', 'placeholder' => '#', 'required' => 'required' ]) }}>{{ $value }}</textarea>
@endif