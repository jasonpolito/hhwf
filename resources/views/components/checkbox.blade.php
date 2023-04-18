@props(['id', 'text'])

<label for="{{ $id ?? '' }}" class="flex gap-3 py-1 leading-6 cursor-pointer group hover:underline">
    <span>
        <span>
            <input type="checkbox" id="{{ $id ?? '' }}" {{ !rand(0, 4) ? 'checked' : '' }}
                   class="w-6 h-6 border appearance-none cursor-pointer peer border-slate-400 checked:border-primary checked:bg-primary group-hover:border-primary">
            <div class="items-center justify-center hidden text-white pointer-events-none fill-parent peer-checked:flex">
                <div
                     class="absolute top-[-0.45rem] h-[85%] w-[35%] rotate-[40deg] transform border-b-[0.2rem] border-r-[0.2rem] border-white">
                </div>
            </div>
        </span>
    </span>
    <span>{!! $text ?? 'Checkbox' !!}</span>
</label>
