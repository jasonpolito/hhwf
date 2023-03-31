<h3>
    <a href="#" class="flex gap-8 my-12 first:mt-0 group">
        <div class="hidden w-1/4 sm:block">
            <div class="overflow-hidden border border-slate-400">
                <div style="padding-top: 100%; background-image: url({{ asset('assets/img/' . $record['img']) }})"
                    class="w-full transition duration-500 bg-center bg-cover group-hover:scale-105 group-focus-within:scale-105 bg-primary-300">
                </div>
            </div>
        </div>
        <div class="w-full sm:w-3/4">
            <div
                class="flex justify-between gap-4 py-2 mb-4 font-serif text-xl border-b decoration-slate-300 border-slate-400 group-hover:underline group-focus-within:underline">
                <span>{{ Str::limit($record['title'], 80) }}</span>
                <div class="flex justify-end w-8 pr-2">
                    <x-heroicon-o-chevron-right
                        class="w-8 h-8 transition group-hover:translate-x-2 group-focus:translate-x-2" />
                </div>
            </div>
            {{ $extra }}
        </div>
    </a>
</h3>