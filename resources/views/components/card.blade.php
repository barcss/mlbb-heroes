@props(['highlight' => false])

<div @class(['highlights' => $highlight, 'card'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn"> View Details</a>
</div>