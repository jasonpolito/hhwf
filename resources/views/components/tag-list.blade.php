<ul class="text-xs">
    @foreach ($tags as $tag)
    <li class="inline-block mb-2 mr-1">
        <a href="{{ $tag['url'] }}"
            class="block px-3 py-2 bg-transparent border rounded-full hocus:bg-white hocus:text-slate-800 text-slate-500 border-slate-500">
            {{ $tag['text'] }}
        </a>
    </li>
    @endforeach
</ul>