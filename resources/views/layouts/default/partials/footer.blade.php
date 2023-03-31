@php
$cols = [
[ // col 1
'For Patients & Visitors' => [
'Find a Medical Service',
'Find a Doctor',
'Billing Information',
'Pay My Bill',
'Medical Records',
'Gift Shop',
'Visitation Policy',
],
'For Medical Professionals' => [
"Residency & Fellowship",
"Referrals",
"Physician Opportunities",
"Radiography Program",
"Medical Library",
"Nursing Education",
"Physician Portal",
"Medical Staff Services",
]
],
[ // col 2
'For Job Seekers' => [
'Search Jobs',
'Seasonal Pool Program',
'Employment Resources',
],
'For Billing' => [
'Pay My Bill',
'Patient Portal',
'Price Estimates',
'Pricing Transparency',
],
'For Donations' => [
'Make a Donation',
],
'In The Media' => [
'News Articles',
'Upcoming Events',
'Halifax Podcast',
],
],
[ // col 3
'Contact Us' => [
'Send Us a Message',
'Patient Interaction Center',
'Billing Questions',
],
'Main Campuses' => [
'Daytona Beach',
'Port Orange',
'Deltona',
],
'About Halifax Health' => [
'Board of Commissioners',
'Financial Statement',
'Leadership',
'Meetings',
'Our History',
'Partnerships',
'Testimonials',
],
]
];
@endphp

<div class="py-16 bg-primary">
    <x-container>
        <div class="flex items-center justify-center gap-16">
            <div>
                <h3 class="font-serif text-3xl text-white">Ready to schedule an appointment online?</h3>
                <x-dev-note>Last CTA before footer</x-dev-note>
            </div>
            <div>
                <x-btn class="text-white bg-slate-900">
                    Schedule Appointment
                </x-btn>
            </div>
        </div>
    </x-container>
</div>

<x-section class="font-light text-white bg-primary-900">
    <x-container>
        <div class="flex justify-between gap-8">
            @foreach ($cols as $col)
            <div class="w-1/4">
                @foreach ($col as $title => $links)
                <h4 class="mb-3">{{ $title }}</h4>
                <ul class="mb-10 -ml-4">
                    @foreach ($links as $link)
                    <li><a href="#"
                            class="inline-block px-4 py-1 text-slate-400 hocus:text-slate-300 hocus:underline">{{ $link }}</a>
                    </li>
                    @endforeach
                </ul>
                @endforeach
            </div>
            @endforeach
            <div>
                <a href="#" style="width: 320px"
                    class="block mb-12 text-slate-400 hocus:text-slate-300">@include('partials.logo-horizontal', ['text'
                    =>
                    'currentColor', 'icon' => 'currentColor'])</a>

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
                $icons = [
                'youtube',
                'facebook',
                'instagram',
                'twitter',
                ]
                @endphp
                <ul class="flex gap-4">
                    @foreach ($icons as $icon)
                    <li>
                        <a href="#" class="text-slate-400 hocus:text-slate-300">@include("partials.icons.$icon",
                            ['class'
                            =>
                            'w-8 h-8'])</a>
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
                <li><a href="#" class="hocus:underline hocus:text-slate-300">Privacy Policy</a></li>
                <li>|</li>
                <li><a href="#" class="hocus:underline hocus:text-slate-300">Terms of Use</a></li>
            </ul>
        </div>
    </x-container>
</div>