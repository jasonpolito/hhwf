<x-hero :img="asset('assets/img/daytona.jpg')">
    <x-cols>
        <x-col class="-mt-2 xl:w-2/3">
            <x-text class="prose-p:font-light prose-white prose-headings:leading-tight">
                <h1>
                    Halifax Health Medical Center of Daytona Beach
                </h1>
                <p>Halifax Health Medical Center of Daytona Beach is a 563-bed hospital. All major
                    medical and surgical services are available.
                    The 24-hours emergency department (ED) includes the area’s only Level II Trauma
                    Center.</p>
            </x-text>
        </x-col>
        <x-col class="self-end xl:w-1/3">
            @php
            $links = [
            'Find Services',
            'Our Doctors',
            'Schedule Appointment',
            'Get Directions',
            ];
            @endphp
            <ul class="flex flex-wrap w-full pt-8 text-lg text-white md:w-2/3 lg:w-full xl:pt-0">
                @foreach ($links as $link)
                <li
                    class="w-full lg:w-1/4 xl:w-full border-t lg:border-t-0 lg:border-l xl:border-l-0 xl:border-t border-[rgba(255,255,255,.5)] first:border-none">
                    <a href="#"
                        class="flex justify-between gap-12 px-4 py-4 pr-6 decoration-white decoration-1 group hocus:underline">
                        <span>{{ $link }}</span>
                        <div class="w-6">
                            <x-heroicon-o-chevron-right
                                class="w-6 h-6 transition-transform group-hocus:translate-x-2" />
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
            <x-dev-note>
                Quick access to common actions
            </x-dev-note>
        </x-col>
    </x-cols>
</x-hero>