@props(['gap' => '8'])

<div {{ $attributes->merge(['class' => 'flex flex-wrap ' . "-mx-$gap" ]) }}>
    {{ $slot }}
</div>