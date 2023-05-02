<div class="py-4 border-b border-slate-200 md:py-8">
    <x-container>
        <div class="flex items-center justify-between">
            <a href="/">
                <img src="{{ asset('assets/img/hh_logo.png') }}" alt="" class="w-60 sm:w-72">
            </a>
            <ul class="flex items-center gap-4">
                <li class="hidden lg:block">
                    <div>
                        <input type="text" placeholder="Search Halifax Health"
                               class="px-4 py-2 pl-12 border rounded-full border-slate-300">
                        <a href="{{ route('pages.search.index') }}"
                           class="absolute block w-6 h-6 left-4 top-2 text-slate-300">
                            <x-heroicon-o-magnifying-glass class="w-6 h-6 text-slate-300" />
                        </a>
                    </div>
                </li>
                <li class="hidden md:block">
                    <a href="#" class="flex gap-2 px-3 py-2 -mx-3 text-sm text-slate-500">
                        <x-heroicon-o-user class="w-4 h-4 top-px" />
                        <span><span class="hidden lg:inline">Patient</span> Login</span>
                    </a>
                </li>
                <li class="hidden -top-px text-slate-300 md:block">|</li>
                <li class="hidden md:block">
                    <a href="#" class="flex gap-2 px-3 py-2 -mx-3 text-sm text-slate-500">
                        <x-heroicon-o-clipboard-document-list class="w-4 h-4 top-px" />
                        <span>Medical Records</span>
                    </a>
                </li>
                <li class="lg:hidden">
                    <a href="#" class="block p-2 -mr-2">
                        <x-heroicon-o-bars-3 class="w-8 h-8" />
                    </a>
                </li>
            </ul>
        </div>
    </x-container>
</div>
