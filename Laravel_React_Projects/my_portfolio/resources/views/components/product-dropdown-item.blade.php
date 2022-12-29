@props(['active' => false])

@php
$classes = 'block text-left px-3 text-sm leading-6 hover:bg-gray-800 focus:bg-gray-800 hover:text-white focus:text-white';

if ($active) {
    $classes .= ' bg-gray-800 text-white';
}
@endphp

<a {{ $attributes(['class' => $classes]) }}>{{ $slot }}</a>
