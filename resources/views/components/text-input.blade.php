@props([
    'label', //
    'placeholder',
    'searchable',
    'id',
])
@php
    $id = $id ?? uniqid();
    $label = $label ?? 'Input Label';
    $placeholder = $placeholder ?? $label;
@endphp
<label for="{{ $id }}" class="block mb-6">
    <x-whisper class="text-slate-900">{{ $label }}</x-whisper>
    <span class="flex items-center w-full border-b group border-slate-400">
        <input id="{{ $id }}" type="text" placeholder="{{ $placeholder }}"
               class="w-full py-2 leading-6 bg-transparent">
        @if ($searchable)
            <a href="#"
               class="flex items-center gap-2 px-4 py-2 -mx-4 text-sm leading-6 text-slate-400 group-focus-within:text-primary hocus:text-primary">
                <x-heroicon-o-magnifying-glass class="w-5 h-5" />
            </a>
            <div style="max-height: 280px"
                 class="absolute left-0 z-10 hidden w-full overflow-scroll bg-white border shadow-lg pointer-events-none top-full border-slate-400 group-focus-within:pointer-events-auto group-focus-within:block">
                {{-- <ul class="p-4">
                    @foreach ($cities->sortBy('text') as $record)
                        @php
                            $id = Str::slug($record['text']);
                        @endphp
                        <li>
                            <x-checkbox :$id :text="$record['text']" />
                        </li>
                    @endforeach
                </ul> --}}
            </div>
        @endif
    </span>
</label>
