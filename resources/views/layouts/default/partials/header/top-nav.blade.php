<div class="py-8 border-b border-slate-200">
    <x-container>
        <div class="flex items-center justify-between">
            <div>
                <img src="{{ asset('assets/img/hh_logo.png') }}" alt="" class="w-52 sm:w-72">
            </div>
            <ul class="items-center hidden gap-4 lg:flex">
                <li>
                    <div>
                        <input type="text" placeholder="Search Halifax Health"
                            class="px-4 py-2 pl-12 border rounded-full border-slate-300">
                        <x-heroicon-o-magnifying-glass class="absolute w-6 h-6 left-4 top-2 text-slate-300" />
                    </div>
                </li>
                <li>
                    <a href="#" class="flex gap-2 px-3 py-2 -mx-3 text-sm text-slate-500">
                        <x-heroicon-o-user class="w-4 h-4 top-px" />
                        <span>Patient Login</span>
                    </a>
                </li>
                <li class="-top-px text-slate-300">|</li>
                <li>
                    <a href="#" class="flex gap-2 px-3 py-2 -mx-3 text-sm text-slate-500">
                        <x-heroicon-o-clipboard-document-list class="w-4 h-4 top-px" />
                        <span>Medical Records</span>
                    </a>
                </li>
            </ul>
        </div>
    </x-container>
</div>