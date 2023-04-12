<x-hero :img="asset('assets/img/family1.jpg')">
    <x-cols>
        <x-col class="-mt-2 xl:w-2/3">
            <div class="flex gap-2 mb-6 -mt-6 text-white decoration-1">
                <div><a href="#" class="opacity-50 hover:opacity-100 hover:underline">Services</a></div>
                <div class="opacity-50">•</div>
                <div><a href="#" class="hover:underline">Diabetes Prevention & Care</a></div>
            </div>
            <x-text class="prose-p:font-light prose-white prose-headings:leading-tight">
                <h1>
                    Knowledge is power.
                </h1>
                <p>According to the Centers for Disease Control and Prevention, there are 30.3 million people who have
                    diabetes and 84.1 million who have pre-diabetes in the United States. These numbers are rapidly
                    increasing.</p>
            </x-text>

        </x-col>
        <x-col class="self-end xl:w-1/3">
            @php
            $links = [
            'Find a Location',
            'Schedule Appointment',
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