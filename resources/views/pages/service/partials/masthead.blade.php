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
            {{-- <div class="flex gap-2 mb-6 -mt-6 text-white decoration-1">
                <div><a href="#" class="opacity-50 hover:opacity-100 hover:underline">Services</a></div>
                <div class="opacity-50">•</div>
                <div><a href="#" class="hover:underline">Radiology</a></div>
            </div>
            <x-text class="prose-p:font-light prose-white prose-headings:leading-tight">
                <h1>
                    Bringing the full picture into perspective.
                </h1>
                <p>Our board-certified doctors, technologists, nurses, and support team members are dedicated to
                    providing outstanding patient care.</p>
            </x-text> --}}
        </x-col>
        <x-col class="self-end xl:w-1/3">

        </x-col>
    </x-cols>
</x-hero>