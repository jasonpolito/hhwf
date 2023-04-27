@props([
    'img', //
    'id',
    'reverse' => false,
    'contentTextClass' => 'prose-white prose-p:font-thin ',
    'contentBgClass' => 'bg-primary-900 ',
    'ctaClass' => 'bg-primary-50 ',
])
<x-container id="{{ $id ?? '' }}">
    <div class="-mx-12">
        <div class="grid grid-cols-2">
            @if (isset($title))
                <div class="col-span-2 bg-primary-50 p-14">
                    {{ $title }}
                </div>
            @endif
            <div class="row-span-3 bg-center bg-cover"
                 style="background-image: url({{ $img ?? asset('assets/img/happynurse.webp') }})">
                <div class="fill-parent">
                    {{ $aside ?? '' }}
                </div>
            </div>
            <a href="#"
               {{ $content->attributes->merge(['class' => 'group row-span-2 p-14 text-white ' . ($reverse ? '-order-1 ' : '') . $contentBgClass]) }}>
                <div>
                    <x-text class="{{ $contentTextClass }}">
                        {{ $content ?? '' }}
                    </x-text>
                </div>
                <div class="flex justify-end pt-16">
                    <x-heroicon-o-arrow-long-right
                                                   class="w-12 h-12 transition group-hover:translate-x-2 group-focus:translate-x-2" />
                </div>
            </a>
            <a href="#" class="{{ $ctaClass }} group py-8 px-14 text-xl">
                <div class="flex items-center justify-between gap-16">
                    {{ $cta ?? '' }}
                    <x-heroicon-o-arrow-long-right
                                                   class="w-12 h-12 transition group-hover:translate-x-2 group-focus:translate-x-2" />
                </div>
            </a>
        </div>
    </div>
</x-container>
