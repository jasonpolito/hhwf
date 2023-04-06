<x-section>
    <x-container>
        <x-cols class="justify-between">
            <x-col class="lg:w-1/2">
                <div>
                    <div>
                        <x-text>
                            <h2>Planning a visit to<br>Halifax Health?</h2>
                            <p>Check our <a href="#">Patient Resources</a> center for patient and visitor guidelines and
                                trusted health information.</p>
                        </x-text>
                        <x-dev-note>Use "friendly" language to direct vistors, not just titles</x-dev-note>
                    </div>
                    <div class="flex items-center gap-6 pt-12 text-base ">
                        <div>
                            <x-btn class="text-white bg-primary" :url="route('pages.locations.index')">
                                <span>Find a Location</span>
                                <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                            </x-btn>
                        </div>
                    </div>
                </div>

            </x-col>
            <x-col class="lg:w-2/3 xl:w-1/2">
                <div>
                    <x-post-card-list :records="$locations" />
                    <x-dev-note>Main campuses featured w/ address displayed</x-dev-note>
                </div>
            </x-col>
        </x-cols>
    </x-container>
</x-section>