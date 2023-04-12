<x-cols :$gutter class="pt-6">
    @for ($i = 0; $i < 12; $i++) @php $img=rand(0,3) ? asset('assets/img/'. $locations->
        random(1)->first()['img']) : "";
        @endphp
        <x-col class="mb-8 md:w-1/2 lg:w-1/3" :$gutter>
            <a href="{{ route("pages.locations.show") }}"
                class="block mb-4 overflow-hidden bg-center bg-cover border bg-primary-50 border-slate-400"
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
                class="prose-sm prose prose-a:no-underline hover:prose-a:underline prose-headings:font-serif prose-headings:font-normal">
                <h3><a href="/location/show">{{ $locations->random(1)->first()['title'] }}</a></h3>
            </div>
            <p class="my-4 text-sm text-slate-500">{!! $locations->random(1)->first()['addr'] !!}</p>
        </x-col>
        @endfor
</x-cols>