@if (request()->input('devnotes'))
<div style="margin: -1rem; width: calc(100% + 2rem); height: calc(100% + 2rem);"
    class="absolute top-0 left-0 z-50 w-full h-full p-2 pr-4 font-mono text-sm text-base font-bold border border-dashed border-amber-300 cursor-help group not-prose">
    <div style="backdrop-filter: blur(3px)"
        class="absolute top-0 left-0 w-full h-full transition group-hover:hidden bg-amber-300/40"></div>
    <div class="group-hover:hidden">
        <span
            class="px-2 py-1 font-bold leading-7 border shadow-lg bg-amber-200 text-amber-950 box-decoration-clone border-amber-300">{{ $slot }}</span>
    </div>
</div>
@endif