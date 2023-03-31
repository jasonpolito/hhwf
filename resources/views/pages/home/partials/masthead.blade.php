<div class="lg:container lg:mx-auto lg:px-12">
    <div class="pt-32 bg-center bg-cover lg:-mx-12"
        style="background-image: url({{ asset('assets/img/masthead.jpg') }})">
        <div class=" bg-gradient-to-b from-transparent via-[rgba(0,25,49,0.8)] to-primary-900">
            <div class="container px-8 pt-32 mx-auto pb-14 lg:px-12">
                <div class="flex flex-wrap items-center justify-between gap-16 xl:flex-nowrap">
                    <div class="w-full -mt-2 xl:w-2/3">
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
                                Human-focused messaging and imagery, not buildings
                            </x-dev-note>
                        </div>
                    </div>
                    <div class="self-end w-full xl:w-1/3">
                        @php
                        $links = [
                        'Schedule Appointment',
                        'Medical Records',
                        'Find Careers',
                        ];
                        @endphp
                        <ul class="flex flex-wrap w-full pt-8 text-lg text-white md:w-2/3 lg:w-full xl:pt-0">
                            @foreach ($links as $link)
                            <li
                                class="w-full lg:w-1/3 xl:w-full border-t lg:border-t-0 lg:border-l xl:border-l-0 xl:border-t border-[rgba(255,255,255,.5)] first:border-none">
                                <a href="#"
                                    class="flex items-center justify-between gap-12 px-4 py-4 pr-6 decoration-white decoration-1 group hocus:underline">
                                    <span>{{ $link }}</span>
                                    <x-heroicon-o-chevron-right
                                        class="w-6 h-6 transition-transform group-hocus:translate-x-2" />
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <x-dev-note>
                            Quick access to common actions
                        </x-dev-note>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>