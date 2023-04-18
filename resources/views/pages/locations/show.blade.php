@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes - Single Location'
];
$gutter = 3;
$loc = $locations->get(request()->input('l') ?? 0);
@endphp

@extends('layouts.default', ['hidden' => ['news']])

@section('content')
<x-hero :img="asset('assets/img/' . $loc['img'])">
    <x-cols>
        <x-col class="-mt-2 xl:w-2/3">
            <x-text class="prose-p:font-light prose-white prose-headings:leading-tight">
                <h1>
                    {{ $loc['title'] }}
                </h1>
                <p>{{ $loc['excerpt'] }}</p>
            </x-text>
        </x-col>
        <x-col class="self-end xl:w-1/3">
            @php
            $links = [
            ['Find Doctors', '#doctors'],
            ['Express Care', '#'],
            ['Emergency Department', '#'],
            ['Get Directions', '#'],
            ];
            @endphp
            <ul class="flex flex-wrap w-full pt-8 text-lg text-white md:w-2/3 lg:w-full xl:pt-0">
                @foreach ($links as $link)
                <li
                    class="w-full lg:w-1/4 xl:w-full border-t lg:border-t-0 lg:border-l xl:border-l-0 xl:border-t border-[rgba(255,255,255,.5)] first:border-none">
                    <a href="{{ $link[1] }}"
                        class="flex justify-between gap-12 px-4 py-4 pr-6 decoration-white decoration-1 group hocus:underline">
                        <span>{{ $link[0] }}</span>
                        <div class="w-6">
                            <x-heroicon-o-chevron-right
                                class="w-6 h-6 transition-transform group-hocus:translate-x-2" />
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
            <x-dev-note>
                Quick access to common actions
            </x-dev-note>
        </x-col>
    </x-cols>
</x-hero>
<x-section>
    <x-container>
        <x-cols>
            <x-col class="w-full sm:w-1/2 lg:w-1/3">
                <div class="mb-12 bg-center bg-cover border border-slate-400 bg-primary-100"
                    style="background-image: url({{ asset('assets/img/map.png') }}); padding-top: 100%">
                </div>
            </x-col>
            <x-col class="w-full md:w-1/2 lg:w-2/3">
                <x-cols>
                    <x-col class="mb-12 sm:w-1/2 md:w-full lg:w-1/2">
                        <h3 class="py-4 mb-4 font-serif text-xl border-b border-slate-400">
                            Contact & Directions
                        </h3>
                        <div
                            class="prose prose-a:font-normal prose-a:decoration-1 prose-a:no-underline hover:prose-a:underline prose-a:text-primary">
                            <h4>Address</h4>
                            <p><a href="#">{!! $loc['addr'] !!}</a></p>
                            <h4>Phone</h4>
                            <p><a href="#">386.425.4000</a></p>
                        </div>
                    </x-col>
                    <x-col class="sm:w-1/2 md:w-full lg:w-1/2">
                        <h3 class="py-4 mb-4 font-serif text-xl border-b border-slate-400">
                            Visiting Hours
                        </h3>
                        <div class="prose">
                            <h4>Guests</h4>
                            <p>Visiting hours are 8:00 am to
                                8:00 pm, 7
                                days a week.
                            </p>
                            <h4>Critical Care <i>(3rd & 5th floor)</i></h4>
                            <p>Critical Care is open 24 hours a day, 7 days a week.
                            </p>
                        </div>
                    </x-col>
                </x-cols>
            </x-col>
        </x-cols>
    </x-container>
</x-section>

<x-section class="bg-primary-50" id="doctors">
    <x-container>
        <x-text class="mb-8 text-center">
            <h3>Find doctors at {{ $loc['title'] }}</h3>
        </x-text>
        @include('pages.doctors.partials.search')
    </x-container>
</x-section>

<x-section style="padding-bottom: 0">
    <x-container>
        <x-cols :$gutter class="items-center justify-between mb-16">
            <x-col :$gutter class="lg:w-1/2">
                <x-text>
                    <h1>Blog & News</h1>
                </x-text>
            </x-col>
            <x-col :$gutter class="lg:w-1/2">
                <x-text>
                    <p>Keep up with the latest news, events, and announcements from our team at {{ $loc['title'] }}.</p>
                </x-text>
            </x-col>
        </x-cols>
        <x-whisper class="mb-6">Recent articles</x-whisper>
        <x-cols :$gutter>
            <x-col class="lg:w-1/2" :$gutter>
                <a href="{{ route('pages.blog.show') }}"
                    class="block mb-8 bg-center bg-cover border bg-primary-50 border-slate-400"
                    style="padding-top: 66%; background-image: url(https://picsum.photos/seed/{{ rand(10,999) }}/1200/800)"></a>
                <div class="flex gap-1 mb-4 text-xs text-slate-500">
                    <div>{{ now()->format('F jS, Y') }}</div>
                    <div>•</div>
                    <div>{{ rand(3, 20) }} min read</div>
                </div>
                <x-text>
                    <h3>{{ fake()->sentence }}</h3>
                    <p>{{ Str::limit(fake()->paragraph, 100) }}</p>
                </x-text>
                <div class="flex gap-1 pt-6 mb-4 text-xs text-slate-500">
                    @foreach ($tags->random(rand(1,3)) as $tag)
                    <div class="px-[0.4rem] text-xs border rounded-full border-slate-400">{{ $tag['text'] }}</div>
                    @endforeach
                </div>
            </x-col>
            <x-col class="lg:w-1/2" :$gutter>
                <div class="grid grid-rows-3 gap-6">
                    @for ($i = 0; $i < 3; $i++) <div class="grid grid-cols-12 row-span-1 gap-6">
                        <a href="{{ route('pages.blog.show') }}"
                            class="col-span-5 bg-center bg-cover border bg-primary-50 border-slate-400"
                            style="background-image: url(https://picsum.photos/seed/{{ rand(10,999) }}/600/300)"></a>
                        <div class="col-span-7">
                            <div class="flex gap-1 mb-4 text-xs text-slate-500">
                                <div>{{ now()->format('F jS, Y') }}</div>
                                <div>•</div>
                                <div>{{ rand(3, 20) }} min read</div>
                            </div>
                            <div class="prose-sm prose prose-headings:font-serif prose-headings:font-normal">
                                <h3>{{ Str::limit(fake()->sentence, 80) }}</h3>
                            </div>
                            <p class="my-4 text-sm">{{ Str::limit(fake()->paragraph, 80) }}</p>

                            <div class="flex gap-1 mb-4 text-xs text-slate-500">
                                @foreach ($tags->random(rand(1,3)) as $tag)
                                <div class="px-[0.4rem]  px- text-xs border rounded-full border-slate-400">
                                    {{ $tag['text'] }}</div>
                                @endforeach
                            </div>
                        </div>
                </div>
                @endfor
                </div>
            </x-col>
        </x-cols>
    </x-container>
</x-section>

@endsection