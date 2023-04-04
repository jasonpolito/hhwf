<div {{ $attributes->merge(['class' => '']) }}>
    <div class="xl:container xl:mx-auto 2xl:px-32 max-w-7xl">
        <div class="pt-24 bg-center bg-cover lg:-mx-12" style="background-image: url({{ $attributes['img'] ?? '' }})">
            <div
                class="pt-24 pb-14 {{ !$hideGradient ? 'bg-gradient-to-b from-transparent via-[rgba(0,25,49,0.9)] to-primary-900' : '' }}">
                <x-container class="">
                    {{ $slot }}
                </x-container>
            </div>
        </div>
    </div>
</div>