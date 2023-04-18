<x-cols :$gutter class="pt-6">
    @for ($i = 0; $i < 12; $i++)
        @php
            $img = rand(0, 5) ? asset('assets/img/docs/doc' . rand(1, 10) . '.jpg') : '';
        @endphp
        <x-col class="mb-8 md:w-1/2 lg:w-1/3" :$gutter>
            <a href="{{ route('pages.doctors.show') }}"
               class="block mb-4 overflow-hidden bg-cover border border-slate-400 bg-slate-200"
               style="padding-top: 100%; background-position: center top; background-image: url({{ $img }})">
                <div class="flex items-center justify-center fill-parent">
                    <div class="w-1/3 text-slate-200 mix-blend-multiply">@include('partials.logo-icon')</div>
                </div>
                <div class="bg-center bg-cover fill-parent" style="background-image: url({{ $img }})">
                </div>
            </a>
            <div class="flex gap-1 mb-2 text-xs text-slate-500">
                <div>{{ $cities->random(1)->first()['text'] }}</div>
            </div>
            <div
                 class="prose-sm prose prose-headings:font-serif prose-headings:font-normal prose-a:no-underline hover:prose-a:underline">
                <h3><a href="{{ route('pages.doctors.show') }}">{{ $doctors->random(1)->first() }}</a></h3>
            </div>
            <p class="my-4 text-sm text-slate-500">{!! $locations->random(1)->first()['addr'] !!}</p>
        </x-col>
    @endfor
</x-cols>
