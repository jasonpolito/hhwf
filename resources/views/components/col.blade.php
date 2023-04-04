@props(['gap' => '8'])

<div {{ $attributes->merge(['class' => 'w-full ' . "px-$gap"]) }}>
    {{ $slot }}
</div>