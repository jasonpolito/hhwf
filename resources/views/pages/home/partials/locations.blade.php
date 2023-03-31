@php
$locs = [
'Halifax Health – Medical Center of Daytona Beach' => [
'img' => 'daytona.jpg',
'addr' => '201 N Clyde Morris Blvd. Suite 110 Daytona Beach, FL 32114'
],
'Halifax Health – Medical Center of Port Orange' => [
'img' => 'portorange.jpg',
'addr' => '1185 Dunlawton Ave. Suite 105 Port Orange, FL 32127'
],
'Halifax Health | UF Health – Medical Center of Deltona' => [
'img' => 'deltona.jpg',
'addr' => '3400 Halifax Crossings Blvd., Suite 140 Deltona, FL 32725'
],
]
@endphp
<x-section>
    <x-container>
        <div class="flex flex-wrap justify-between gap-16 lg:flex-nowrap">
            <div class="w-full lg:w-1/3">
                <x-text>
                    <h2>Planning a visit to Halifax Health?</h2>
                    <p>Check our <a href="#">Patient Resources</a> center for patient and visitor guidelines and
                        trusted health information.</p>
                    <div class="flex items-center gap-6 pt-6 text-base not-prose">
                        <div>

                            <x-btn class="text-white bg-primary">
                                <span>Find a Location</span>
                                <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                            </x-btn>
                        </div>
                        <a href="#">Visitors Guide</a>
                    </div>
                </x-text>
            </div>
            <div class="w-full lg:w-2/3 xl:w-1/2">
                <ul>
                    @foreach ($locs as $name => $info)
                    @php
                    $record = [
                    'title' => $name,
                    'img' => $info['img']
                    ]
                    @endphp
                    <li>
                        <x-record-preview :$record>
                            <x-slot name="extra">
                                <div class="text-xs text-slate-500">{{ $info['addr'] }}</div>
                            </x-slot>
                        </x-record-preview>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </x-container>
</x-section>