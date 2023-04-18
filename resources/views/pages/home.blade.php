@php
    $page = (object) [
        'meta_title' => 'Halifax Health Wireframes',
    ];
    $gutter = 3;
@endphp

@extends('layouts.default')

@section('content')
    @include('pages.home.partials.masthead')
    @include('pages.home.partials.locations')
    @include('pages.home.partials.careers')
    @include('partials.services')

    <x-section id="doctors">
        <x-container>
            <x-text class="mb-8 text-center">
                <h3>Find Doctors At Halifax Health Locations</h3>
            </x-text>
            @include('pages.doctors.partials.search')
        </x-container>
    </x-section>

    <div class="grid-rows-2 grid-rows-3 grid-rows-4 px-4 px-6 px-8 px-12 px-16 -mx-4 -mx-6 -mx-8 -mx-12 -mx-16 sm:text-xl">
    </div>
@endsection
