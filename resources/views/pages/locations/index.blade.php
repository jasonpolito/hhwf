@php
    $page = (object) [
        'meta_title' => 'Halifax Health Wireframes - Locations Index',
    ];
    $gutter = 3;
@endphp

@extends('layouts.default')

@section('content')
    <x-hero :img="asset('assets/img/portorange.jpg')">
        <x-cols class="items-center" :$gutter>
            <x-col class="-mt-2 xl:w-1/2" :$gutter>
                <x-text class="prose-white prose-headings:leading-tight prose-p:font-light">
                    <h1>
                        Find A Location
                    </h1>
                </x-text>
            </x-col>
            <x-col class="-mt-2 xl:w-1/2" :$gutter>
                <p class="text-lg leading-loose text-white/80">Planning a visit to Halifax Health? Check our
                    <a href="" class="text-white underline decoration-white/50 hover:decoration-white">Patient
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
                        @include('pages.doctors.partials.filter-pills')
                    </div>
                </x-col>
                <x-col class="lg:w-3/4" :$gutter>
                    <x-whisper class="py-4 border-b border-slate-400"><strong>73</strong> locations match your search
                        criteria</x-whisper>
                    @include('pages.locations.partials.grid')
                    {{-- @include('pages.locations.partials.list') --}}
                    @include('partials.pagination')

                </x-col>
            </x-cols>

        </x-container>
    </x-section>
@endsection
