@php
$gutter = 3;
@endphp
<x-cols :$gutter>
    <x-col class="lg:w-1/4" :$gutter>
        <div class="pr-8 text-sm">
            @include('pages.doctors.partials.filter-pills')
        </div>
    </x-col>
    <x-col class="lg:w-3/4" :$gutter>
        <x-whisper class="pb-2 border-b border-slate-400"><strong>24</strong> doctors match your search
            criteria</x-whisper>
        @include('pages.doctors.partials.grid')
        @include('partials.pagination')
    </x-col>
</x-cols>