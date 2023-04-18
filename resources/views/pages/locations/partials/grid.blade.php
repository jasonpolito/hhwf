@php
    $count = $count ?? 12;
    $cols = $cols ?? 3;
@endphp
<x-cols :$gutter class="pt-6">
    @for ($i = 0; $i < $count; $i++)
        @php
            $img = rand(0, 3) ? asset('assets/img/' . $locations->random(1)->first()['img']) : '';
        @endphp
        <x-col class="lg:w-1/{{ $cols }} mb-8 md:w-1/2" :$gutter>
            <a href="{{ route('pages.locations.show') }}"
               class="block mb-4 overflow-hidden bg-center bg-cover border border-slate-400 bg-primary-50"
               style="padding-top: 66%; background-image: url({{ $img }})">
                <div class="flex items-center justify-center fill-parent">
                    <div class="w-1/3 text-slate-100 mix-blend-multiply">@include('partials.logo-icon')</div>
                </div>
                <div class="bg-center bg-cover fill-parent" style="background-image: url({{ $img }})">
                </div>
            </a>
            <div class="flex gap-1 mb-2 text-xs text-slate-500">
                <div>{{ $cities->random(1)->first()['text'] }}</div>
            </div>
            <div
                 class="prose-sm prose prose-headings:font-serif prose-headings:font-normal prose-a:no-underline hover:prose-a:underline">
                <h3><a href="/location/show">{{ $locations->random(1)->first()['title'] }}</a></h3>
            </div>
            <p class="my-4 text-sm text-slate-500">{!! $locations->random(1)->first()['addr'] !!}</p>
        </x-col>
    @endfor
</x-cols>
