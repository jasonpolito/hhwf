<x-section class="bg-primary-50">
    <x-container>
        <div class="flex flex-wrap justify-between gap-16 lg:flex-nowrap">
            <div class="w-full lg:w-1/3">
                <x-text>
                    <h2>Find a Service</h2>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                </x-text>
                <div class="flex pt-12">
                    <x-btn class="text-white bg-primary">
                        <span>All Services</span>
                        <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                    </x-btn>
                </div>
            </div>
            <div class="w-full lg:w-2/3 xl:w-1/2">
                @include('partials.services')
            </div>
        </div>
    </x-container>
</x-section>