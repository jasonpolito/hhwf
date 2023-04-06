<x-section class="bg-primary-50">
    <x-container>
        <x-cols class="justify-between">
            <x-col class="lg:w-1/3">
                <x-text>
                    <h2>Find the exact service for you.</h2>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                </x-text>
                <div class="flex pt-12">
                    <x-btn class="text-white bg-primary">
                        <span>All Services</span>
                        <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                    </x-btn>
                </div>
            </x-col>
            <x-col class="lg:w-2/3 xl:w-1/2">
                <div>
                    <div class="mb-8">
                        <input type="text" placeholder="Search for services"
                            class="block w-full py-6 pl-16 text-2xl font-light bg-transparent border-b focus:outline-none placeholder:text-slate-400 placeholder:font-light peer border-slate-400">
                        <x-heroicon-o-magnifying-glass
                            class="absolute left-0 w-12 h-12 pointer-events-none peer-focus:text-primary top-4 text-slate-300" />
                        <x-dev-note>
                            Allow user to search for services directly from here
                        </x-dev-note>
                    </div>
                    <div>
                        <h4 class="mb-2 text-xs text-slate-500">Common searches:</h4>
                        <x-tag-list :tags="$services->random(8)" />
                        <x-dev-note>
                            Again, providing quick access to common stuff (random for dev)
                        </x-dev-note>
                    </div>
                </div>
            </x-col>
        </x-cols>
    </x-container>
</x-section>