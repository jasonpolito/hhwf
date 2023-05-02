@if (!$reverse && false)
    @include('pages.home.partials.philosophy')
@endif
@if (!in_array('news', $hidden))
    @include('pages.home.partials.news')
@endif
@if ($reverse || true)
    @include('pages.home.partials.philosophy')
@endif


@php
    $cols = [
        [
            // col 1
            'For Patients & Visitors' => [['Find a Medical Service', '#'], ['Find a Doctor', '#'], ['Billing Information', '#'], ['Pay My Bill', '#'], ['Medical Records', '#'], ['Gift Shop', '#'], ['Visitation Policy', '#']],
            'For Medical Professionals' => [['Residency & Fellowship', '#'], ['Referrals', '#'], ['Physician Opportunities', '#'], ['Radiography Program', '#'], ['Medical Library', '#'], ['Nursing Education', '#'], ['Physician Portal', '#'], ['Medical Staff Services', '#']],
        ],
        [
            // col 2
            'For Job Seekers' => [['Search Jobs', '#'], ['Seasonal Pool Program', '#'], ['Employment Resources', '#']],
            'For Billing' => [['Pay My Bill', '#'], ['Patient Portal', '#'], ['Price Estimates', '#'], ['Pricing Transparency', '#']],
            'For Donations' => [['Make a Donation', '#']],
            'In The Media' => [['News Articles', '#'], ['Upcoming Events', '#'], ['Halifax Podcast', '#']],
        ],
        [
            // col 3
            'Contact Us' => [['Send Us a Message', '#'], ['Patient Interaction Center', '#'], ['Billing Questions', '#']],
            'Main Campuses' => [['Daytona Beach', route('pages.locations.show', ['l' => 1])], ['Port Orange', route('pages.locations.show', ['l' => 2])], ['Deltona', route('pages.locations.show', ['l' => 3])]],
            'About Halifax Health' => [['Board of Commissioners', route('pages.glossary.index', ['t' => 'about'])], ['Financial Statement', route('pages.glossary.index', ['t' => 'about'])], ['Leadership', route('pages.glossary.index', ['t' => 'about'])], ['Meetings', route('pages.glossary.index', ['t' => 'about'])], ['Our History', route('pages.glossary.index', ['t' => 'about'])], ['Partnerships', route('pages.glossary.index', ['t' => 'about'])], ['Testimonials', route('pages.glossary.index', ['t' => 'about'])]],
        ],
    ];
@endphp

@include('layouts.default.partials.appointment')

<x-section class="font-light text-white bg-primary-900">
    <x-container>
        <div class="flex justify-between gap-8">
            @foreach ($cols as $col)
                <div class="w-full md:w-1/4">
                    @foreach ($col as $title => $links)
                        <h4 class="mb-3">{{ $title }}</h4>
                        <ul class="mb-10 -ml-4">
                            @foreach ($links as $link)
                                <li><a href="{{ $link[1] }}"
                                       class="inline-block px-4 py-1 text-slate-400 hocus:text-slate-300 hocus:underline">{{ $link[0] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            @endforeach
            <div>
                <a href="#" style="width: 320px"
                   class="block mb-12 text-slate-400 hocus:text-slate-300">@include('partials.logo-horizontal', [
                       'text' => 'currentColor',
                       'icon' => 'currentColor',
                   ])</a>

                <h4>Stay Up-to-date</h4>
                <label class="flex items-center w-full mb-12 border-b group border-slate-400">
                    <input type="text" placeholder="email@example.com" class="w-full py-4 leading-6 bg-transparent">
                    <a href="#"
                       class="flex items-center gap-2 py-4 pl-4 -mx-px text-sm leading-6 text-slate-400 group-focus-within:text-white hocus:text-white">
                        <span>Subscribe</span>
                        <x-heroicon-o-paper-airplane class="w-4 h-4 left-px" />
                    </a>
                </label>
                <h4 class="mb-4">Follow Halifax Health</h4>
                @php
                    $icons = ['youtube', 'facebook', 'instagram', 'twitter'];
                @endphp
                <ul class="flex gap-4">
                    @foreach ($icons as $icon)
                        <li>
                            <a href="#"
                               class="text-slate-400 hocus:text-slate-300">@include("partials.icons.$icon", ['class' => 'w-8 h-8'])</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </x-container>
</x-section>

<div class="py-8 text-xs bg-slate-950 text-slate-500">
    <x-container>
        <div class="flex justify-between">
            <ul class="leading-5">
                <li class="mb-1">&copy Copyright 2023 Halifax Health. All Rights Reserved</li>
            </ul>
            <ul class="flex gap-2">
                <li><a href="#" class="hocus:text-slate-300 hocus:underline">Privacy Policy</a></li>
                <li>|</li>
                <li><a href="#" class="hocus:text-slate-300 hocus:underline">Terms of Use</a></li>
            </ul>
        </div>
    </x-container>
</div>
