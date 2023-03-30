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
'Halifax Health – UF Health – Medical Center of Deltona' => [
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
                    <p>Check our <a href="">Patient Resources</a> center for patient and visitor guidelines and
                        trusted health information.</p>
                    <div class="flex items-center gap-6 pt-6 text-base not-prose">
                        <div>

                            <x-btn class="text-white bg-primary">
                                Find a Location
                            </x-btn>
                        </div>
                        <a href="#">Visitors Guide</a>
                    </div>
                </x-text>
            </div>
            <div class="w-full lg:w-2/3 xl:w-1/2">
                <ul>
                    @foreach ($locs as $name => $info)
                    <li class="flex items-center gap-8 my-12 first:mt-0">
                        <div class="hidden w-1/4 sm:block">
                            <a href="#" class="block overflow-hidden group">
                                <div style="padding-top: 100%; background-image: url({{ asset('assets/img/' . $info['img']) }})"
                                    class="w-full transition duration-500 bg-center bg-cover group-hover:scale-105 group-focus:scale-105 bg-primary-300">
                                </div>
                            </a>
                        </div>
                        <div class="w-full sm:w-3/4">
                            <h4 class="font-serif text-xl">
                                <a href="#" class="flex justify-between gap-4 group hover:underline focus:underline">
                                    <span>{{ $name }}</span>
                                    <x-heroicon-o-chevron-right
                                        class="w-8 h-8 transition group-hover:translate-x-2 group-focus:translate-x-2" />
                                </a>
                            </h4>
                            <div class="my-4 border-b border-slate-200"></div>
                            <div class="flex gap-2 text-sm text-slate-500">
                                {{-- <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4 top-px" /> --}}
                                <div>{{ $info['addr'] }}</div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </x-container>
</x-section>