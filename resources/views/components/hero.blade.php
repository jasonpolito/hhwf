<div class="xl:container xl:mx-auto xl:px-12 max-w-7xl">
    <div class="pt-24 bg-center bg-cover lg:-mx-12" style="background-image: url({{ $attributes['img'] ?? '' }})">
        <div class="pt-24 pb-14 bg-gradient-to-b from-transparent via-[rgba(0,25,49,0.8)] to-primary-900">
            <x-container class="">
                {{ $slot }}
            </x-container>
        </div>
    </div>
</div>
</div>