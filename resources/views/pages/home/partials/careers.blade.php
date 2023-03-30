<x-container>
    <div class="-mx-12">
        <div class="grid grid-cols-2 mb-12 md:mb-16 lg:mb-24">
            <a href="#" class="row-span-3 overflow-hidden bg-center bg-cover group"
                style="background-image: url({{ asset('assets/img/happynurse.webp') }})">
                <div class="absolute top-0 left-0 w-full h-full transition duration-500 bg-center bg-cover group-hover:scale-105"
                    style="background-image: url({{ asset('assets/img/happynurse.webp') }})">
                </div>
            </a>
            <a href="#" class="row-span-2 p-14 bg-primary-900 group">
                <x-text class="prose-white prose-p:font-thin">
                    <h3 class="group-hover:underline">Join Our Talented Team</h3>
                    <p>We’re glad you’re here. As a cornerstone of our community, we need strong, compassionate,
                        and
                        talented medical professionals just like you.
                    </p>
                </x-text>
                <div class="flex justify-end pt-16">
                    <x-heroicon-o-arrow-long-right
                        class="w-12 h-12 text-white transition group-hover:translate-x-2 group-focus:translate-x-2" />
                </div>
            </a>
            <a href="#" class="flex items-center justify-between gap-16 py-8 text-xl px-14 bg-primary-50 group">
                <h3 class="group-hover:underline">Not ready to relocate? Learn about HaliFlex</h3>
                <x-heroicon-o-arrow-long-right
                    class="w-12 h-12 transition group-hover:translate-x-2 group-focus:translate-x-2" />
            </a>
        </div>
    </div>
</x-container>