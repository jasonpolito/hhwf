@php
    $page = (object) [
        'meta_title' => 'Halifax Health Wireframes - Glossary Index',
    ];
    $gutter = 3;
    $patients = [
        'General Information' => [
            'desc' => 'Discover all the information you need to know about our hospital with our General Information section. From directions and parking information to learning about your patient rights and responsibilities, our aim is to make your hospital stay as smooth as possible.',
            'items' => ['Directions and Parking', 'Patient Rights and Responsibilities', 'Your Hospital Stay', 'Visitor Badge'],
        ],
        'Patient Services & Amenities' => [
            'desc' => 'Our Patient Services & Amenities section is designed to help make your hospital experience as comfortable as possible. From patient amenities to admission and discharge procedures, we are here to help you every step of the way.',
            'items' => ['Patient Amenities', 'Preparing for Your Surgery', 'Admission & Discharge'],
        ],
        'Billing & Financial Assistance' => [
            'desc' => 'We understand that dealing with medical bills and insurance can be overwhelming. That\'s why we offer a range of financial assistance options to help ease the burden. Our Billing & Financial Assistance section provides information on billing, insurance, and payment plans, so you can focus on what really matters – your health.',
            'items' => ['Billing Information', 'Financial Assistance', 'Pricing', 'Discounts, Collections, and Payment Plans', 'Insurance Information'],
        ],
        'Patient Resources & Tools' => [
            'desc' => 'At our hospital, we want to empower our patients with the information and resources they need to take control of their health. Our Patient Resources & Tools section provides access to patient portals, information on how to request medical records, quality information, and tips on how to choose the right healthcare provider. We are here to support you on your healthcare journey!',
            'items' => ['Patient Portals', 'Medical Records Request', 'Quality Information', 'Choose Wisely'],
        ],
    ];
    $about = [
        'Leadership & Governance' => [
            'desc' => 'Learn more about the hospital\'s leadership and governance structure. This section includes information on the Board of Commissioners, Board of Commissioners Meetings, and hospital leadership.',
            'items' => ['Board of Commissioners', 'Board of Commissioners Meetings', 'Leadership'],
        ],
        'Our History & Values' => [
            'desc' => 'Explore the hospital\'s history and values, including information on the hospital\'s Code of Conduct and Discrimination Policy.',
            'items' => ['History', 'Code of Conduct', 'Discrimination Policy'],
        ],
        'Community & Advocacy' => [
            'desc' => 'Discover how the hospital engages with the community and advocates for important causes. This section includes information on the Speakers Bureau, Advocates, and the hospital\'s Speediatrics program.',
            'items' => ['Speakers Bureau', 'Advocates', 'Speediatrics'],
        ],
        'Human Resources & Policies' => [
            'desc' => 'Learn about the hospital\'s human resources policies and pension plans, as well as public records related to the hospital.',
            'items' => ['Human Resources', 'Public Records', 'Pension Plans'],
        ],
    ];
    $map = [
        'patients' => [
            'img' => asset('assets/img/daytona3.webp'),
            'title' => 'Information for Patients & Visitors',
            'desc' => 'Find information about patient services, billing & financial assistance, patient resources and tools, and more we are committed to providing you with the best possible experience.',
            'items' => $patients,
        ],
        'about' => [
            'img' => asset('assets/img/lobbyteam.jpg'),
            'title' => 'Learn About Halifax Health',
            'desc' => 'From leadership and governance to our history and values, community engagement, and human resources policies, we\'re proud to share our story with you.',
            'items' => $about,
        ],
    ];
    $type = request()->input('t') ?? 'patients';
    $info = (object) $map[$type];
@endphp

@extends('layouts.default')

@section('content')
    <x-hero :img="$info->img">
        <x-cols class="items-center" :$gutter>
            <x-col class="-mt-2 xl:w-1/2" :$gutter>
                <x-text class="prose-white prose-headings:leading-tight prose-p:font-light">
                    <h1>
                        {{ $info->title }}
                    </h1>
                </x-text>
            </x-col>
            <x-col class="-mt-2 xl:w-1/2" :$gutter>
                <p class="text-lg leading-loose text-white/80">{{ $info->desc }}</p>
            </x-col>
        </x-cols>
    </x-hero>
    <x-section>
        <x-container>
            <x-cols>
                <x-col class="lg:w-1/3">
                    <div>
                        {{-- <h3 class="py-4 mb-4 font-serif text-xl border-b border-slate-400">
                            Search
                        </h3> --}}
                        <label class="flex items-center w-full mb-4 border-b group border-slate-400">
                            <input type="text" placeholder="Search" class="w-full py-4 leading-7 bg-transparent">
                            <a href="#"
                               class="flex items-center gap-2 px-4 py-4 -mx-px text-sm leading-6 text-slate-400 group-focus-within:text-primary hocus:text-primary">
                                <x-heroicon-o-magnifying-glass class="w-6 h-6 left-px" />
                            </a>
                        </label>
                    </div>
                </x-col>
                <x-col class="md:w-2/3">
                    <x-cols>
                        @foreach ($info->items as $title => $data)
                            <x-col class="mb-8 md:w-1/2">
                                <h3 class="py-4 mb-4 font-serif text-xl border-b border-slate-400">
                                    {{ $title }}
                                </h3>
                                <div
                                     class="prose prose-a:font-normal prose-a:text-primary prose-a:no-underline prose-a:decoration-1 hover:prose-a:underline">
                                    <ul>
                                        @foreach ($data['items'] as $item)
                                            <li><a href="#">{{ $item }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </x-col>
                        @endforeach
                    </x-cols>
                </x-col>
            </x-cols>
        </x-container>
    </x-section>
@endsection
