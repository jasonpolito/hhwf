@php
    $gutter = 3;
@endphp
<x-cols :$gutter>
    <x-col class="lg:w-1/4" :$gutter>
        <div class="pr-8 text-sm">
            <label class="flex items-center w-full mb-4 border-b group border-slate-400">
                <input type="text" placeholder="Search doctors by name" class="w-full py-4 leading-6 bg-transparent">
                <a href="#"
                   class="flex items-center gap-2 px-4 py-4 -mx-px text-sm leading-6 text-slate-400 group-focus-within:text-primary hocus:text-primary">
                    <x-heroicon-o-magnifying-glass class="w-6 h-6 left-px" />
                </a>
            </label>
            @include('pages.doctors.partials.filter-pills')
        </div>
    </x-col>
    <x-col class="lg:w-3/4" :$gutter>
        <x-whisper class="py-4 border-b border-slate-400"><strong>24</strong> doctors match your search
            criteria</x-whisper>
        @include('pages.doctors.partials.grid')
        @include('partials.pagination')
    </x-col>
</x-cols>
