@php
$links = [
'Patients & Visitors' => [
['text' => 'Directions & Parking', 'url' => '/location'],
['text' => 'Billing Information', 'url' => '/location'],
['text' => 'Medical Records', 'url' => '/location'],
['text' => 'Patient Portal', 'url' => '/location'],
['text' => 'View More', 'url' => '/location'],
],
'Medical Services' => [
['text' => 'Cancer Care', 'url' => '/service'],
['text' => 'Cardiology', 'url' => '/service'],
['text' => 'Labor & Delivery', 'url' => '/service'],
['text' => 'Orthopedics', 'url' => '/service'],
['text' => 'Plastic Surgery & Aesthetics', 'url' => '/service'],
['text' => 'View All Services', 'url' => '/services'],
],
'Find a Location' => [
['text' => 'Daytona Beach', 'url' => '/location'],
['text' => 'Port Orange', 'url' => '/location'],
['text' => 'Deltona', 'url' => '/location'],
],
'Find a Doctor' => [
['text' => 'Daytona Beach', 'url' => '/location'],
['text' => 'Port Orange', 'url' => '/location'],
['text' => 'Deltona', 'url' => '/location'],
],
'For Medical Professionals' => [
['text' => 'Careers', 'url' => '#'],
['text' => 'Residency & Fellowship', 'url' => '#'],
['text' => 'Medical Staff Services', 'url' => '#'],
['text' => 'Physician Opportunites', 'url' => '#'],
['text' => 'Radiograph Program', 'url' => '#'],
['text' => 'Referrals', 'url' => '#'],
],
];
@endphp

<div class="hidden border-b border-slate-200 lg:block">
    <x-container>
        <div>
            <ul class="flex justify-between gap-4">
                @foreach ($links as $link => $dropdown)
                <li>
                    <div class="-mx-2 group">
                        <a href="#" class="flex items-center gap-3 px-2 py-4 peer group">
                            <span>{{ $link }}</span>
                            <x-heroicon-o-chevron-down
                                class="w-6 h-6 transition text-slate-300 group-hover:text-slate-500 group-focus-within:text-primary-500 group-hover:rotate-180 group-focus-within:rotate-180" />
                        </a>
                        <ul
                            class="absolute z-10 min-w-full px-6 pt-2 pb-4 -mt-px -ml-6 bg-white border-b shadow-lg opacity-0 pointer-events-none left-2 hover:pointer-events-auto focus-within:pointer-events-auto peer-hover:pointer-events-auto peer-focus:pointer-events-auto hover:opacity-100 focus-within:opacity-100 peer-hover:opacity-100 peer-focus:opacity-100 whitespace-nowrap border-x border-slate-200 top-full">
                            @foreach ($dropdown as $link)
                            <li>
                                <a href="{{ $link['url'] }}"
                                    class="block px-3 py-1 pr-8 -mx-3 hocus:bg-primary-50 hocus:underline decoration-slate-400 decoration-1">{{ $link['text'] }}</a>
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