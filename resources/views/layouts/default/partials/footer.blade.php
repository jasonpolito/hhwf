@php
$cols = [
[ // col 1
'For Patients & Visitors' => [
'Find a Medical Service',
'Find a Doctor',
'Billing Information',
'Pay My Bill',
'Medical Records',
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
            <h3 class="font-serif text-3xl text-white">Ready to schedule your appointment online?</h3>
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
                <h4 class="mb-4">{{ $title }}</h4>
                <ul class="mb-12 -ml-4">
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
                    class="block mb-16 text-slate-400 hocus:text-slate-300">@include('partials.logo-horizontal', ['text'
                    =>
                    'currentColor', 'icon' => 'currentColor'])</a>

                <h4 class="mb-4">Follow Halifax Health</h4>
                @php
                $icons = [
                'youtube',
                'facebook',
                'instagram',
                'twitter',
                ]
                @endphp
                <ul class="flex gap-4 mb-16">
                    @foreach ($icons as $icon)
                    <li>
                        <a href="#" class="text-slate-400 hocus:text-slate-300">@include("partials.icons.$icon",
                            ['class'
                            =>
                            'w-8 h-8'])</a>
                    </li>
                    @endforeach
                </ul>
                <h4 class="mb-4">Newsletter</h4>

                <label class="flex items-center gap-2 p-2 border rounded-full group border-slate-400">
                    <input type="text" placeholder="email@example.com"
                        class="w-full px-4 py-2 mr-2 bg-transparent rounded-full left-2">
                    <a href="#"
                        class="px-4 py-2 text-sm border rounded-full group-focus-within:bg-white group-focus-within:text-primary group-focus-within:border-white text-slate-400 w-14 h-14 border-slate-400">
                        <div class="top-0 left-0 flex flex-col items-center justify-center w-full h-full">
                            <x-heroicon-o-paper-airplane class="w-8 h-8 left-px" />
                        </div>
                    </a>
                </label>
            </div>
        </div>
    </x-container>
</x-section>

<div class="py-12 bg-slate-950"></div>