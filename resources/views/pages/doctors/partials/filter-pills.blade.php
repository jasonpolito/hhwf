<label class="flex items-center w-full mb-4 border-b group border-slate-400">
    <input type="text" placeholder="Filter by location" class="w-full py-4 leading-6 bg-transparent">
    <a href="#"
       class="flex items-center gap-2 px-4 py-4 -mx-px text-sm leading-6 text-slate-400 group-focus-within:text-primary hocus:text-primary">
        <x-heroicon-o-magnifying-glass class="w-6 h-6 left-px" />
    </a>
    <div style="max-height: 280px"
         class="absolute left-0 z-10 hidden w-full overflow-scroll bg-white border shadow-lg pointer-events-none top-full border-slate-400 group-focus-within:pointer-events-auto group-focus-within:block">
        <ul class="p-4">
            @foreach ($cities->sortBy('text') as $record)
                @php
                    $id = Str::slug($record['text']);
                @endphp
                <li>
                    <x-checkbox :$id :text="$record['text']" />
                </li>
            @endforeach
        </ul>
    </div>
</label>
<x-tag-list class="mb-8" :items="$cities->random(rand(1, 4))" :deletable="true" size="small" />
<label class="flex items-center w-full mb-4 border-b group border-slate-400">
    <input type="text" placeholder="Filter by service" class="w-full py-4 leading-6 bg-transparent">
    <a href="#"
       class="flex items-center gap-2 px-4 py-4 -mx-px text-sm leading-6 text-slate-400 group-focus-within:text-primary hocus:text-primary">
        <x-heroicon-o-magnifying-glass class="w-6 h-6 left-px" />
    </a>
    <div style="max-height: 280px"
         class="absolute left-0 z-10 hidden w-full overflow-scroll bg-white border shadow-lg pointer-events-none top-full border-slate-400 group-focus-within:pointer-events-auto group-focus-within:block">
        <ul class="p-4">
            @foreach ($services->sortBy('text') as $record)
                @php
                    $id = Str::slug($record['text']);
                @endphp
                <li>
                    <x-checkbox :$id :text="$record['text']" />
                </li>
            @endforeach
        </ul>
    </div>
</label>
@php
    $items = $services->random(rand(2, 5))->map(function ($item) {
        $item['text'] = Str::limit($item['text'], 18);
        return $item;
    });
@endphp
<x-tag-list :$items :deletable="true" size="small" />
