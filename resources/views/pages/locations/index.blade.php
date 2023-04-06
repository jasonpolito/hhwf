@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes - Locations Index'
];
$gutter = 3;
@endphp

@extends('layouts.default')

@section('content')
<x-hero :img="asset('assets/img/portorange.jpg')">
    <x-cols class="items-center" :$gutter>
        <x-col class="-mt-2 xl:w-1/2" :$gutter>
            <x-text class="prose-p:font-light prose-white prose-headings:leading-tight">
                <h1>
                    Find A Location
                </h1>
            </x-text>
        </x-col>
        <x-col class="-mt-2 xl:w-1/2" :$gutter>
            <p class="text-lg leading-loose text-white/80">Planning a visit to Halifax Health? Check our
                <a href="" class="underline decoration-white/50 hover:text-white hover:decoration-white">Patient
                    Resources</a> center for
                patient and
                visitor
                guidelines and trusted health information.
            </p>
        </x-col>
    </x-cols>
</x-hero>
<x-section style="padding-top: 0;">
    <x-container class="pt-16">
        <x-cols :$gutter>
            <x-col class="lg:w-1/4" :$gutter>
                <div class="pr-8 text-sm">
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
                </div>
            </x-col>
            <x-col class="lg:w-3/4" :$gutter>
                <x-whisper class="pb-2 mb-6 border-b border-slate-400"><strong>73</strong> locations match your search
                    criteria</x-whisper>
                <x-cols :$gutter>
                    @for ($i = 0; $i < 12; $i++) @php $img=rand(0,3) ? asset('assets/img/'. $locations->
                        random(1)->first()['img']) : "";
                        @endphp
                        <x-col class="mb-8 md:w-1/2 lg:w-1/3" :$gutter>
                            <a href="{{ route("pages.locations.show") }}"
                                class="block mb-4 overflow-hidden bg-center bg-cover border bg-primary-50 border-slate-400"
                                style="padding-top: 66%; background-image: url({{ $img }})">
                                <div class="flex items-center justify-center fill-parent">
                                    <div class="w-1/3 text-primary-100">@include('partials.logo-icon')</div>
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
                            <p class="my-4 text-sm">{{ $locations->random(1)->first()['addr'] }}</p>
                        </x-col>
                        @endfor
                </x-cols>
                @include('partials.pagination')

            </x-col>
        </x-cols>

    </x-container>
</x-section>
@endsection