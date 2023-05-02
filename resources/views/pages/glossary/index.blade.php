@php
    $page = (object) [
        'meta_title' => 'Halifax Health Wireframes - Glossary Index',
    ];
    $gutter = 3;
    $patients = [
        'General Information' => ['Directions and Parking', 'Patient Rights and Responsibilities', 'Your Hospital Stay', 'Visitor Badge'],
        'Patient Services & Amenities' => ['Patient Amenities', 'Preparing for Your Surgery', 'Admission & Discharge'],
        'Billing & Financial Assistance' => ['Billing Information', 'Financial Assistance', 'Pricing', 'Discounts, Collections, and Payment Plans', 'Insurance Information'],
        'Patient Resources & Tools' => ['Patient Portals', 'Medical Records Request', 'Quality Information', 'Choose Wisely'],
    ];
    $type = request()->input('type') ?? 'patients';
    $touts = [
        'patients' => $patients,
    ];
@endphp

@extends('layouts.default')

@section('content')
    <x-section>
        <x-container>
            <x-cols>
                <x-col class="mb-16 lg:w-1/2">
                    <div class="sticky top-0 pt-16 -mt-16">
                        <x-text class="mb-8">
                            <h2>For Patient & Visitors</h2>
                            <p>Find info about the world-class services and compassionate patient-centered care we
                                provide at
                                Halifax
                                Health.</p>
                        </x-text>
                        <div
                             class="prose prose-a:font-normal prose-a:text-primary prose-a:no-underline prose-a:decoration-1 hover:prose-a:underline">
                            <ul>
                                @foreach ($touts[$type] as $title => $items)
                                    <li><a href="#{{ Str::slug($title) }}">{{ $title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </x-col>
                <x-col class="-mt-16 lg:w-1/2">
                    @foreach ($touts[$type] as $title => $items)
                        <div class="pt-16" id="{{ Str::slug($title) }}">
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
                        </div>
                    @endforeach
                </x-col>
            </x-cols>
        </x-container>
    </x-section>
@endsection
