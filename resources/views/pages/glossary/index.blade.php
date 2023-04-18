@php
    $page = (object) [
        'meta_title' => 'Halifax Health Wireframes - Locations Index',
    ];
    $gutter = 3;
    $links = ['Speakers Bureau', 'Halifax Health Board of Commissioners', 'Halifax Health Associates', 'DME Academy', 'Speediatrics', 'Code of Conduct & Quality Content', 'Halifax Health Leadership', 'Our History', 'Public Records', 'Testimonials', 'Board of Commissioners’ Meetings', 'Human Resources', 'Civil Rights Accommodation', 'Team Members and Retirees'];
    sort($links);
@endphp

@extends('layouts.default')

@section('content')
    <x-section>
        <x-container>
            <x-cols class="lg:flex-nowrap">
                <x-col class="lg:w-auto">
                    <ul>
                        @foreach ($links as $item)
                            <li><a href="#">{{ $item }}</a></li>
                        @endforeach
                    </ul>
                </x-col>
                <x-col class="w-full"></x-col>
            </x-cols>
        </x-container>
    </x-section>
@endsection
