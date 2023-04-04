<x-section>
    <x-container>
        <x-cols>
            <x-col class="w-full sm:w-1/2 lg:w-1/3">
                <div class="mb-12 bg-center bg-cover border border-slate-400 bg-primary-100"
                    style="background-image: url({{ asset('assets/img/map.png') }}); padding-top: 100%">
                    <div class="flex items-center justify-center fill-parent">
                        {{-- <div>Map</div> --}}
                    </div>
                </div>
            </x-col>
            <x-col class="w-full md:w-1/2 lg:w-2/3">
                <x-cols>
                    <x-col class="mb-12 sm:w-1/2 md:w-full lg:w-1/2">
                        <h3 class="py-4 mb-4 font-serif text-xl border-b border-slate-400">
                            Contact & Directions
                        </h3>
                        <div
                            class="prose prose-a:font-normal prose-a:decoration-1 prose-a:no-underline hover:prose-a:underline prose-a:text-primary">
                            <h4>Address</h4>
                            <p><a href="#">303 N Clyde Morris Blvd, Daytona Beach, FL 32114</a></p>
                            <h4>Phone</h4>
                            <p><a href="#">386.425.4000</a></p>
                            <h4>Visitors</h4>
                            <p><a href="#">Schedule Appointment</a></p>
                        </div>
                        {{-- <div class="flex pt-8">
                            <x-btn class="text-white bg-primary">
                                <span>Schedule Appointment</span>
                                <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                            </x-btn>
                        </div> --}}
                    </x-col>
                    <x-col class="sm:w-1/2 md:w-full lg:w-1/2">
                        <h3 class="py-4 mb-4 font-serif text-xl border-b border-slate-400">
                            Visiting Hours
                        </h3>
                        <div class="prose">
                            <h4>Guests</h4>
                            <p>Visiting hours are 8:00 am to
                                8:00 pm, 7
                                days a week.
                            </p>
                            <h4>Critical Care <i>(3rd & 5th floor)</i></h4>
                            <p>Critical Care is open 24 hours a day, 7 days a week.
                            </p>
                        </div>
                    </x-col>
                </x-cols>
            </x-col>
        </x-cols>
    </x-container>
</x-section>