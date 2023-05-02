@props([
    'img', //
    'id',
    'reverse' => false,
    'mainArrowHelper' => false,
    'ctaArrowHelper' => false,
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
                <div class="flex items-center justify-end pt-16">
                    @if ($mainArrowHelper)
                        <span
                              class="text-xs font-light transition transform translate-x-2 opacity-0 whitespace-nowrap group-hover:translate-x-0 group-hover:opacity-50">{{ $mainArrowHelper }}</span>
                    @endif
                    <x-heroicon-o-arrow-long-right
                                                   class="w-12 h-12 transition group-hover:translate-x-2 group-focus:translate-x-2" />
                </div>
            </a>
            <a href="#" class="{{ $ctaClass }} group py-8 px-14 text-xl">
                <div class="flex items-center justify-between gap-16">
                    <span class="w-full">{{ $cta ?? '' }}</span>
                    <div class="flex items-center">

                        @if ($ctaArrowHelper)
                            <span
                                  class="text-xs font-light transition transform translate-x-2 opacity-0 whitespace-nowrap group-hover:translate-x-0 group-hover:opacity-50">{{ $ctaArrowHelper }}</span>
                        @endif
                        <x-heroicon-o-arrow-long-right
                                                       class="w-12 h-12 transition group-hover:translate-x-2 group-focus:translate-x-2" />
                    </div>
                </div>
            </a>
        </div>
    </div>
</x-container>
