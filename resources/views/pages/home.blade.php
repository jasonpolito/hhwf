@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes'
]
@endphp

@extends('layouts.default')

@section('content')

@include('pages.home.partials.masthead')
@include('pages.home.partials.locations')
@include('pages.home.partials.careers')
@include('partials.services')
<x-section>
    <x-container>
        // kitchen sink
    </x-container>
</x-section>
{{-- @include('pages.home.partials.philosophy')
@include('pages.home.partials.blog') --}}

<div class="grid-rows-2 grid-rows-3 grid-rows-4 px-4 px-6 px-8 px-12 px-16 -mx-4 -mx-6 -mx-8 -mx-12 -mx-16 sm:text-xl">
</div>
@endsection