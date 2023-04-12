<label class="flex items-center w-full mb-4 border-b group border-slate-400">
    <input type="text" placeholder="Seach Doctors" class="w-full py-4 leading-6 bg-transparent">
    <a href="#"
        class="flex items-center gap-2 px-4 py-4 -mx-px text-sm leading-6 text-slate-400 group-focus-within:text-primary hocus:text-primary">
        <x-heroicon-o-magnifying-glass class="w-6 h-6 left-px" />
    </a>
</label>
<x-whisper class="pb-2 mb-4 border-b border-slate-400">Services Offered</x-whisper>
<ul class="pl-4 mb-4">
    @foreach ($services->random(10)->sortBy('text') as $record)
    @php
    $id = Str::slug($record['text']);
    @endphp
    <li>
        <x-checkbox :$id :text="$record['text']" />
    </li>
    @endforeach
</ul>
<x-whisper class="pb-2 mb-4 border-b border-slate-400">Located Near</x-whisper>
<ul class="pl-4 mb-4">
    @foreach ($cities->sortBy('text') as $record)
    @php
    $id = Str::slug($record['text']);
    @endphp
    <li>
        <x-checkbox :$id :text="$record['text']" />
    </li>
    @endforeach
</ul>