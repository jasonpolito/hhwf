<ul>
    @foreach (collect(array_fill(0, 3, '')) as $item)
    @foreach ($locations as $item)
    <li class="py-6 pb-8 border-b border-slate-400">
        <h3 class="py-4 font-serif text-2xl">
            {{ $item['title'] }}
        </h3>
        <x-cols>
            <x-col>
                <div class="prose">
                    <ul>
                        <li>{{ $item['addr'] }}</li>
                        <li>386.555.2400</li>
                    </ul>
                </div>
            </x-col>
        </x-cols>
    </li>
    @endforeach
    @endforeach
</ul>