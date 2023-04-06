<div {{ $attributes->merge(['class' => '']) }}>
    <div class="xl:container xl:mx-auto 2xl:px-32">
        <div class="pt-24 bg-center bg-cover bg-primary-50"
            style="background-image: url({{ $attributes['img'] ?? '' }})">
            @if ($leftGradient)
            <div class="fill-parent bg-gradient-to-l from-transparent to-primary-900"></div>
            @endif
            <div
                class="pt-24 pb-16 {{ !$hideGradient ? 'bg-gradient-to-b from-transparent via-[rgba(0,25,49,0.8)] to-primary-900' : '' }}">
                <x-container class="">
                    {{ $slot }}
                </x-container>
            </div>
        </div>
    </div>
</div>