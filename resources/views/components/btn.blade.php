@props(['url'])
<a href="{{ $url ?? '#' }}"
    {{ $attributes->merge(['class' => 'flex gap-4 group items-center px-8 py-4 text-lg rounded-full']) }}>
    {{ $slot }}
</a>