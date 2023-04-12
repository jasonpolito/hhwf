@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes - Blog Index'
];
$gutter = 3;
@endphp

@extends('layouts.default', ['reverse' => true, 'hidden' => ['news']])

@section('content')

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
                    <p>Keep up with the latest news, events, and announcements from our team at Halifax Health and our
                        community.</p>
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
        <div class="py-12"></div>
        <x-whisper class="mb-8">All articles</x-whisper>
        <x-cols :$gutter>
            @for ($i = 0; $i < 9; $i++) <x-col class="mb-8 md:w-1/2 lg:w-1/3" :$gutter>
                <a href="{{ route('pages.blog.show') }}"
                    class="block mb-6 bg-center bg-cover border bg-primary-50 border-slate-400"
                    style="padding-top: 66%; background-image: url(https://picsum.photos/seed/{{ rand(10,999) }}/600/300)"></a>
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
                </x-col>

                @endfor
        </x-cols>
        @include('partials.pagination')
    </x-container>
</x-section>
@endsection