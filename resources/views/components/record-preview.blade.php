@if (!$card)
<h3>
    <a href="{{ $record['url'] ?? '#' }}" class="flex gap-8 first:mt-0 group">
        @if (!$hideImage)
        <div class="hidden w-1/4 sm:block">
            <div class="overflow-hidden border border-slate-400">
                <div style="padding-top: 100%; background-image: url({{ asset('assets/img/' . ($record['img'] ?? '')) }})"
                    class="w-full transition duration-500 bg-center bg-cover group-hover:scale-105 group-focus-within:scale-105 bg-slate-300">
                </div>
            </div>
        </div>
        @endif
        <div class="w-full {{ !$hideImage ? 'sm:w-2/3' : '' }}">
            <div
                class="flex justify-between gap-4 py-2 mb-4 font-serif sm:text-{{ $titleSize ?? 'xl' }} border-b decoration-slate-400 decoration-1 border-slate-400 group-hover:underline group-focus-within:underline">
                <span>{{ Str::limit($record['title'], 80) }}</span>
                <div class="flex justify-end w-8 pr-2 {{ $titleSize == 'base' ? '-mt-1' : '' }}">
                    <x-heroicon-o-chevron-right
                        class="w-8 h-8 transition group-hover:translate-x-2 group-focus:translate-x-2" />
                </div>
            </div>
            {{ $extra ?? '' }}
        </div>
    </a>
</h3>
@endif