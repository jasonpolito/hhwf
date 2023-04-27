@php
    $page = (object) [
        'meta_title' => 'Halifax Health Wireframes - Careers Index',
    ];
    $gutter = 3;
@endphp

@extends('layouts.default', ['reverse' => true, 'hidden' => ['news']])

@section('content')
    <x-grid-callout img="{{ asset('assets/img/happynurse.webp') }}">
        <x-slot:title>
            <x-cols class="items-center">
                <x-col class="-mt-2 xl:w-2/3">
                    <div>
                        <x-text class="prose-headings:leading-tight">
                            <h1>Life <span class="line-through opacity-75 decoration-2">Changing</span>
                                <br>
                                <span class="italic">Saving</span> Careers
                            </h1>
                        </x-text>
                    </div>
                </x-col>
                <x-col class="self-end xl:w-1/3">
                    @php
                        $links = [
                            ['Find Open Positions', '#'], //
                            ['Seasonal Pool Progam', '#poolprogram'],
                            ['Employee Resources', '#resources'],
                        ];
                    @endphp
                    <ul class="flex flex-wrap w-full pt-8 text-lg md:w-2/3 lg:w-full xl:pt-0">
                        @foreach ($links as $link)
                            <li
                                class="w-full border-t border-slate-400 first:border-none lg:w-1/3 lg:border-t-0 lg:border-l xl:w-full xl:border-l-0 xl:border-t">
                                <a href="{{ $link[1] }}"
                                   class="flex items-center justify-between gap-12 px-4 py-4 pr-6 group decoration-white decoration-1 hocus:underline">
                                    <span>{{ $link[0] }}</span>
                                    <x-heroicon-o-chevron-right
                                                                class="w-6 h-6 transition-transform group-hocus:translate-x-2" />
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </x-col>
            </x-cols>
        </x-slot:title>
        <x-slot:aside>
            @include('partials.videocontrols')
        </x-slot:aside>
        <x-slot:content>
            <h3 class="decoration-white/30 group-hover:underline">Join Our Talented Team</h3>
            <p>We’re glad you’re here. As a cornerstone of our community, we need strong, compassionate,
                and talented medical professionals just like you.</p>
        </x-slot:content>
        <x-slot:cta>Find Open Positions</x-slot:cta>
    </x-grid-callout>

    <x-container>
        <div class="flex justify-end">
            @php
                $logos = [
                    //
                    ['linkedin.jpg', '6rem'],
                    ['glassdoor.webp', '6rem'],
                    ['indeed.jpg', '6rem'],
                ];
            @endphp
            <div class="flex items-center justify-around gap-12 py-8">
                @foreach ($logos as $item)
                    <div>
                        <a href="#" class="block">
                            <img class="transition opacity-50 grayscale filter hover:opacity-100 hover:grayscale-0"
                                 src="{{ asset('assets/img/' . $item[0]) }}" style="width: {{ $item[1] }}"
                                 alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </x-container>

    <x-section>
        <x-container>
            <x-cols class="justify-between">
                <x-col class="lg:w-1/2">
                    <x-text>
                        <h2>Team Member Spotlight</h2>
                        <p>We take great pride in celebrating our Team
                            Members for their unique personalities and contributions.</p>
                        <p>At Halifax Health, we believe in developing a diverse group of talented healthcare professionals
                            who have a passion for serving the local community.</p>
                    </x-text>
                    <div class="flex items-center gap-6 pt-12 text-base">
                        <div>
                            <x-btn class="text-white bg-primary" url="#resources">
                                <span>Comprehensive Benefits</span>
                                <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                            </x-btn>
                        </div>
                    </div>
                </x-col>
                <x-col class="lg:w-2/3 xl:w-1/2">
                    <div class="mb-16"><img src="{{ asset('assets/img/ryan.jpg') }}" alt="">
                        @include('partials.videocontrols')
                    </div>
                    <div class="mb-16"><img src="{{ asset('assets/img/rory.jpg') }}" alt="">
                        @include('partials.videocontrols')
                    </div>
                </x-col>
            </x-cols>
        </x-container>
    </x-section>

    <x-grid-callout img="{{ asset('assets/img/nurses.jpg') }}" id="poolprogram">
        <x-slot:content>
            <h3 class="decoration-white/30 group-hover:underline">Seasonal Pool Program</h3>
            <p>Are you a nurse interested in pursuing travel nursing but don’t want to relocate? Halifax Health has a new
                HaliFlex seasonal pool program for nurses and you don’t have to leave the beach! </p>
            <p>
                Day Shift – $60/hr<br>
                Night Shift – $75/hr
            </p>
        </x-slot:content>
        <x-slot:cta>Learn More About 13-Week Assignments</x-slot:cta>
    </x-grid-callout>

    {{-- <x-hero :img="asset('assets/img/happynurse.webp')">
        <x-cols class="items-center" :$gutter>
            <x-col class="-mt-2 xl:w-2/3" :$gutter>
                <x-text class="prose-white prose-headings:leading-tight prose-p:font-light">
                    <h1>
                        Life <span class="line-through opacity-75 decoration-2">Changing</span><br><span
                              class="italic">Saving</span> Careers
                    </h1>
                </x-text>
            </x-col>
            <x-col class="self-end xl:w-1/3">
                @php
                    $links = [
                        ['Find Open Positions', '#'], //
                        ['13-Week Assignments', '#poolprogram'],
                        ['Employee Resources', '#resources'],
                    ];
                @endphp
                <ul class="flex flex-wrap w-full pt-8 text-lg text-white md:w-2/3 lg:w-full xl:pt-0">
                    @foreach ($links as $link)
                        <li
                            class="w-full border-t border-[rgba(255,255,255,.5)] first:border-none lg:w-1/3 lg:border-t-0 lg:border-l xl:w-full xl:border-l-0 xl:border-t">
                            <a href="{{ $link[1] }}"
                               class="flex items-center justify-between gap-12 px-4 py-4 pr-6 group decoration-white decoration-1 hocus:underline">
                                <span>{{ $link[0] }}</span>
                                <x-heroicon-o-chevron-right
                                                            class="w-6 h-6 transition-transform group-hocus:translate-x-2" />
                            </a>
                        </li>
                    @endforeach
                </ul>
            </x-col>
        </x-cols>
    </x-hero>


    <x-section>
        <x-container>
            <x-cols class="justify-between">
                <x-col class="lg:w-1/2">
                    <x-text>
                        <h2>Join Our Talented Team</h2>
                        <p>We’re glad you’re here. As a cornerstone of our community, we need strong, compassionate,
                            and talented medical professionals just like you.</p>
                    </x-text>
                    <div class="flex items-center gap-6 pt-12 text-base">
                        <div>
                            <x-btn class="text-white bg-primary" :url="route('pages.locations.index')">
                                <span>Find Open Positions</span>
                                <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                            </x-btn>
                        </div>
                    </div>
                </x-col>
                <x-col class="lg:w-2/3 xl:w-1/2">
                    <div class="border border-slate-400">
                        <div style="background-image: url({{ asset('assets/img/nurses2.jpg') }}); padding-top: 56.25%"
                             class="cursor-pointer bg-fill bg-primary-50">
                            <div class="fill-parent">
                                <div class="p-2 bg-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" class="w-16 h-16 stroke-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="absolute bottom-0 left-0 p-6">
                                @include('partials.logo-horizontal', ['class' => 'w-52 text-white'])
                            </div>
                        </div>
                        @php
                            $logos = [
                                //
                                ['linkedin.jpg', '6rem'],
                                ['glassdoor.webp', '6rem'],
                                ['indeed.jpg', '6rem'],
                            ];
                        @endphp
                        <div class="flex items-center justify-around py-8">
                            @foreach ($logos as $item)
                                <div>
                                    <a href="#" class="block">
                                        <img class="transition opacity-50 grayscale filter hover:opacity-100 hover:grayscale-0"
                                             src="{{ asset('assets/img/' . $item[0]) }}" style="width: {{ $item[1] }}"
                                             alt="">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </x-col>
            </x-cols>
        </x-container>
    </x-section> --}}


    {{-- 
    <x-grid-callout img="{{ asset('assets/img/nurses.jpg') }}" id="poolprogram">
        <x-slot:content>
            <h3 class="decoration-white/30 group-hover:underline">Seasonal Pool Program</h3>
            <p>Are you a nurse interested in pursuing travel nursing but don’t want to relocate? Halifax Health has a new
                HaliFlex seasonal pool program for nurses and you don’t have to leave the beach! </p>
            <p>Day Shift – $60/hr
                <br>
                Night Shift – $75/hr
            </p>
        </x-slot:content>
        <x-slot:cta>Learn More About 13-Week Assignments</x-slot:cta>
    </x-grid-callout> --}}

    <x-section id="resources">
        <x-container>
            <x-cols class="justify-between">
                <x-col class="lg:w-1/2">
                    <x-text>
                        <h2>Employee Resources</h2>
                        <p>Learn about healthcare benefits, wellness programs, continuing education opportunities, and
                            more.</p>
                    </x-text>
                    <div class="flex items-center gap-6 pt-12 text-base">
                        <div>
                            <x-btn class="text-white bg-primary" url="#">
                                <span>Find Open Positions</span>
                                <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                            </x-btn>
                        </div>
                    </div>
                </x-col>
            </x-cols>
            <x-cols class="pt-16">
                @php
                    $sections = [
                        'Benefits & Incentives' => [
                            //
                            'Comprehensive Benefits',
                            'Nursing Benefits',
                            'Scholarships',
                            'Referral Bonus',
                        ],
                        'Education & Advancement' => [
                            //
                            'Apprenticeship Program',
                            'Education to Employment',
                            'Educational Opportunities',
                            'Student Nurse Internship Program',
                            'RN Residency Program',
                            'Student Placements',
                        ],
                        'Our Team & Culture' => [
                            //
                            'Our Culture',
                            'Working in Volusia',
                            'Team Members',
                            'Meet the Team',
                        ],
                    ];
                @endphp
                @foreach ($sections as $title => $items)
                    <x-col class="mb-16 lg:w-1/3">
                        <h3 class="py-4 mb-4 font-serif text-xl border-b border-slate-400">
                            {{ $title }}
                        </h3>
                        <div
                             class="prose prose-a:font-normal prose-a:text-primary prose-a:no-underline prose-a:decoration-1 hover:prose-a:underline">
                            <ul>
                                @foreach ($items as $item)
                                    <li><a href="#">{{ $item }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </x-col>
                @endforeach
            </x-cols>
        </x-container>
    </x-section>

    @include('pages.careers.partials.quote')
@endsection
