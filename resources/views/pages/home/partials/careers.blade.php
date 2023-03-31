<x-container>
    <div class="-mx-12">
        <div class="grid grid-cols-2 mb-12 md:mb-16 lg:mb-24">
            <div class="row-span-3 bg-center bg-cover"
                style="background-image: url({{ asset('assets/img/happynurse.webp') }})">
            </div>
            <a href="#" class="row-span-2 p-14 bg-primary-900 group">
                <div>
                    <x-text class="prose-white prose-p:font-thin ">
                        <h3 class="group-hover:underline decoration-white/30">Join Our Talented Team</h3>
                        <p>We’re glad you’re here. As a cornerstone of our community, we need strong, compassionate,
                            and
                            talented medical professionals just like you.
                        </p>
                    </x-text>
                    <x-dev-note>Target job seekers directly after patients and visitors</x-dev-note>
                </div>
                <div class="flex justify-end pt-16">
                    <x-heroicon-o-arrow-long-right
                        class="w-12 h-12 text-white transition group-hover:translate-x-2 group-focus:translate-x-2" />
                </div>
            </a>
            <a href="#" class="py-8 text-xl px-14 bg-primary-50 group">
                <div class="flex items-center justify-between gap-16 ">
                    <h3 class="group-hover:underline decoration-slate-300">Not ready to relocate? Learn about HaliFlex
                    </h3>
                    <x-heroicon-o-arrow-long-right
                        class="w-12 h-12 transition group-hover:translate-x-2 group-focus:translate-x-2" />
                    <x-dev-note>Focus secondary actions</x-dev-note>

                </div>
            </a>
        </div>
    </div>
</x-container>