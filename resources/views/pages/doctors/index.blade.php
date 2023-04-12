@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes - Locations Index'
];
$gutter = 3;
@endphp

@extends('layouts.default')

@section('content')
<x-hero :img="asset('assets/img/happynurse.webp')">
    <x-cols class="items-center" :$gutter>
        <x-col class="-mt-2 xl:w-1/2" :$gutter>
            <x-text class="prose-p:font-light prose-white prose-headings:leading-tight">
                <h1>
                    Find A Doctor
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
    <x-container class="pt-16">@include('pages.doctors.partials.search')</x-container>
</x-section>
@endsection