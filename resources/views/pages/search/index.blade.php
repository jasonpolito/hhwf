@php
    $page = (object) [
        'meta_title' => 'Halifax Health Wireframes - Search Index',
    ];
@endphp

@extends('layouts.default')

@section('content')
    <x-section>
        <x-container>
            <x-cols>
                <x-col>
                    <x-whisper><b>23</b> results found</x-whisper>
                    <x-text>
                        <h3>Search Results for: <b>"<span class="text-primary">search term</span>"</b></h3>
                    </x-text>
                </x-col>
            </x-cols>
        </x-container>
    </x-section>
@endsection
