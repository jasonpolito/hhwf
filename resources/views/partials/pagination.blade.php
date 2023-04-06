@php
$size = 'w-12 h-12';
@endphp
<div class="flex justify-center">
    <div class="flex justify-center px-8 mt-16 border-t border-slate-300 text-slate-400">
        @for ($i = 1; $i <= 3; $i++) <a href="#" class="block {{ $size }}">
            <div
                class="flex items-center justify-center fill-parent {{ $i == 1 ? 'font-bold border-t-2 border-slate-500 text-slate-900' : '' }} hover:text-slate-900">
                <span>{{ $i }}</span>
            </div>
            </a>
            @endfor
            <a href="#" class="block {{ $size }}">
                <div class="flex items-center justify-center fill-parent hover:text-slate-900">
                    <span>...</span>
                </div>
            </a>
            @for ($i = 1; $i <= 3; $i++) <a href="#" class="block {{ $size }}">
                <div class="flex items-center justify-center fill-parent hover:text-slate-900">
                    <span>{{ $i + 6 }}</span>
                </div>
                </a>
                @endfor
    </div>
</div>