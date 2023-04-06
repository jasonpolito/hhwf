@props(['gutter' => $gutter ?? $gap])

<div {{ $attributes->merge(['class' => 'w-full ' . "px-$gutter"]) }}>
    {{ $slot }}
</div>