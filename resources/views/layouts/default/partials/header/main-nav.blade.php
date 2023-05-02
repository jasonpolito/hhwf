@php
    $links = [
        [
            'text' => 'Patients & Visitors',
            'url' => route('pages.glossary.index'),
            // 'url' => route('pages.glossary.index'),
            'items' => [['text' => 'Directions & Parking', 'url' => '#'], ['text' => 'Billing Information', 'url' => '#'], ['text' => 'Medical Records', 'url' => '#'], ['text' => 'Patient Portal', 'url' => '#'], ['text' => 'View More', 'url' => '#']],
        ],
        [
            'text' => 'Medical Services',
            'url' => '#',
            'items' => [['text' => 'Cancer Care', 'url' => '#'], ['text' => 'Cardiology', 'url' => '#'], ['text' => 'Labor & Delivery', 'url' => '#'], ['text' => 'Orthopedics', 'url' => '#'], ['text' => 'Plastic Surgery & Aesthetics', 'url' => '#'], ['text' => 'View All Services', 'url' => '#']],
        ],
        [
            'text' => 'Find a Location',
            'url' => route('pages.locations.index'),
            'items' => [['text' => 'Daytona Beach', 'url' => route('pages.locations.show')], ['text' => 'Port Orange', 'url' => route('pages.locations.show', ['l' => 1])], ['text' => 'Deltona', 'url' => route('pages.locations.show', ['l' => 2])]],
        ],
        [
            'text' => 'Find a Doctor',
            'url' => route('pages.doctors.index'),
            'items' => [['text' => 'Daytona Beach', 'url' => route('pages.locations.show')], ['text' => 'Port Orange', 'url' => route('pages.locations.show')], ['text' => 'Deltona', 'url' => route('pages.locations.show')]],
        ],
        [
            'text' => 'For Medical Professionals',
            'url' => route('pages.careers.index'),
            'items' => [
                // ['text' => 'Careers', 'url' => '#'],
                ['text' => 'Residency & Fellowship', 'url' => '#'],
                ['text' => 'Medical Staff Services', 'url' => '#'],
                ['text' => 'Physician Opportunites', 'url' => '#'],
                ['text' => 'Radiograph Program', 'url' => '#'],
                ['text' => 'Referrals', 'url' => '#'],
            ],
        ],
    ];
@endphp

<div class="hidden border-b border-slate-200 lg:block">
    <x-container>
        <div>
            <ul class="flex justify-between gap-4">
                @foreach ($links as $menu)
                    <li>
                        <div class="-mx-2 group">
                            <a href="{{ $menu['url'] ?? '#' }}" class="flex items-center gap-3 px-2 py-4 group peer">
                                <span>{{ $menu['text'] }}</span>
                                <x-heroicon-o-chevron-down
                                                           class="w-6 h-6 transition text-slate-300 group-focus-within:rotate-180 group-focus-within:text-primary-500 group-hover:rotate-180 group-hover:text-slate-500" />
                            </a>
                            <ul
                                class="absolute z-10 min-w-full px-6 pt-2 pb-4 -mt-px -ml-6 bg-white border-b shadow-lg opacity-0 pointer-events-none left-2 top-full whitespace-nowrap border-x border-slate-200 focus-within:pointer-events-auto focus-within:opacity-100 hover:pointer-events-auto hover:opacity-100 peer-hover:pointer-events-auto peer-hover:opacity-100 peer-focus:pointer-events-auto peer-focus:opacity-100">
                                @foreach ($menu['items'] as $link)
                                    <li>
                                        <a href="{{ $link['url'] }}"
                                           class="block px-3 py-1 pr-8 -mx-3 decoration-slate-400 decoration-1 hocus:bg-primary-50 hocus:underline">{{ $link['text'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
            <x-dev-note>Still working through the basics of this, not sure a simple dropdown will be sufficient -- mega
                menu maybe
            </x-dev-note>
        </div>
    </x-container>
</div>
