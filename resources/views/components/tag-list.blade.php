@props(['items', 'size' => 'default', 'deletable' => false])
@php
    $sizes = [
        'default' => 'px-3 py-2',
        'small' => 'px-2 py-1',
    ];
    $items = $items ?? ($tags ?? []);
@endphp
<ul {{ $attributes->merge(['class' => 'text-xs']) }}>
    @foreach ($items as $tag)
        <li class="inline-block mb-2 mr-1" x-data="{ hidden: false }" x-show="!hidden">
            <a href="{{ $tag['url'] ?? '#' }}" @if ($deletable) @click.prevent="null" @endif
               class="{{ $sizes[$size] }} flex items-center rounded-full border border-slate-500 bg-transparent text-slate-500 hocus:bg-white hocus:text-slate-800">
                <span>{{ $tag['text'] ?? $tag['title'] }}</span>
                @if ($deletable)
                    <span class="pl-1" @click.prevent="hidden = true">
                        <x-heroicon-o-x-mark class="w-4 h-4" />
                    </span>
                @endif
            </a>
        </li>
    @endforeach
</ul>
