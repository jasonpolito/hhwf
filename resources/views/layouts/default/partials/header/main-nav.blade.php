<div class="hidden border-b border-slate-200 lg:block">
    <x-container>
        <ul class="flex justify-between gap-4">
            @foreach ($links as $link => $dropdown)
            <li>
                <div class="-mx-2 group">
                    <a href="#" class="flex items-center gap-3 px-2 py-4 peer group">
                        <span>{{ $link }}</span>
                        <x-heroicon-o-chevron-down
                            class="w-6 h-6 transition text-slate-300 group-hover:text-slate-500 group-focus-within:text-primary-500 group-hover:rotate-180 group-focus-within:rotate-180" />
                    </a>
                    <ul
                        class="absolute z-10 pt-2 pb-4 pl-6 pr-8 -mt-px -ml-6 bg-white border-b shadow-lg opacity-0 pointer-events-none left-2 hover:pointer-events-auto focus-within:pointer-events-auto peer-hover:pointer-events-auto peer-focus:pointer-events-auto hover:opacity-100 focus-within:opacity-100 peer-hover:opacity-100 peer-focus:opacity-100 whitespace-nowrap border-x border-slate-200 top-full">
                        @foreach ($dropdown as $link)
                        <li>
                            <a href="#" class="block px-2 py-1 -ml-2 hover:underline">{{ $link }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            @endforeach
        </ul>
    </x-container>
</div>