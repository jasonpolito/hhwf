@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes - Services Index'
];
$gutter = 3;
@endphp

@extends('layouts.default')
@section('content')
@include('partials.services')

<x-section class="">
    <x-container>
        @foreach (collect(config('halifax.services'))->sort() as $service)
        <div>{{ $service }}</div>

        @endforeach
    </x-container>
</x-section>
@endsection