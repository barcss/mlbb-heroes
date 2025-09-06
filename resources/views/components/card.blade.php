@props(['highlight' => false])

<div @class(['highlights' => $highlight, 'card'])>
    {{ $slot }}
    <a {{ $attributes }} class="button-yellow"> View Details</a>
</div>