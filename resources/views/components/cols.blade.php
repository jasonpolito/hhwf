@props(['gutter' => $gutter ?? $gap])

<div {{ $attributes->merge(['class' => 'flex flex-wrap ' . "-mx-$gutter" ]) }}>
    {{ $slot }}
</div>