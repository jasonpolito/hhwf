<label class="flex items-center w-full mb-4 border-b group border-slate-400">
    <input type="text" placeholder="Seach Locations" class="w-full py-4 leading-6 bg-transparent">
    <a href="#"
       class="flex items-center gap-2 px-4 py-4 -mx-px text-sm leading-6 text-slate-400 group-focus-within:text-primary hocus:text-primary">
        <x-heroicon-o-magnifying-glass class="w-6 h-6 left-px" />
    </a>
</label>
<x-tag-list class="mb-8" :items="$cities->random(rand(1, 4))" :deletable="true" size="small" />
<label class="flex items-center w-full mb-4 border-b group border-slate-400">
    <input type="text" placeholder="Seach services" class="w-full py-4 leading-6 bg-transparent">
    <a href="#"
       class="flex items-center gap-2 px-4 py-4 -mx-px text-sm leading-6 text-slate-400 group-focus-within:text-primary hocus:text-primary">
        <x-heroicon-o-magnifying-glass class="w-6 h-6 left-px" />
    </a>
</label>
@php
    $items = $services->random(rand(2, 5))->map(function ($item) {
        $item['text'] = Str::limit($item['text'], 18);
        return $item;
    });
@endphp
<x-tag-list :$items :deletable="true" size="small" />
