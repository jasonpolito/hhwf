<x-hero :img="asset('assets/img/masthead.jpg')">
    <x-cols class="items-center">
        <x-col class="-mt-2 xl:w-2/3">
            <div>
                <x-text class="prose-white prose-headings:leading-tight">
                    <h1>
                        @if (request()->input('randtitle'))
                            {{ fake()->sentence() }}
                        @else
                            Live Your Life Well.
                        @endif
                    </h1>
                </x-text>
                <x-dev-note>
                    Human-focused messaging and imagery, not buildings (placeholder)
                </x-dev-note>
            </div>
        </x-col>
        <x-col class="self-end xl:w-1/3">
            @php
                $links = [
                    ['Schedule Appointment', route('pages.schedule.index')], //
                    ['Medical Records', '#'],
                    ['Find Careers', '#'],
                ];
            @endphp
            <ul class="flex flex-wrap w-full pt-8 text-lg text-white md:w-2/3 lg:w-full xl:pt-0">
                @foreach ($links as $link)
                    <li
                        class="w-full border-t border-[rgba(255,255,255,.5)] first:border-none lg:w-1/3 lg:border-t-0 lg:border-l xl:w-full xl:border-l-0 xl:border-t">
                        <a href="{{ $link[1] }}"
                           class="flex items-center justify-between gap-12 px-4 py-4 pr-6 group decoration-white decoration-1 hocus:underline">
                            <span>{{ $link[0] }}</span>
                            <x-heroicon-o-chevron-right class="w-6 h-6 transition-transform group-hocus:translate-x-2" />
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
