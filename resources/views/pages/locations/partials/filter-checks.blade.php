<x-whisper class="pb-2 mb-4 border-b border-slate-400">Facilities</x-whisper>
<ul class="pl-4 mb-4">
    <li>
        <x-checkbox id="has_er" text="Emergency Department" />
        <x-checkbox id="has_express" text="Express Care" />
        <x-checkbox id="has_bs" text="Behavioral Services" />
    </li>
</ul>
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