@props(['tags', 'post'])
@php
$post = (object) $post;
$seed = rand(10,999);
$img = $post->img ? asset("assets/img/$post->img") : "https://picsum.photos/seed/$seed/600/300";
@endphp
<a href="{{ $post->url ?? '#' }}"
    class="col-span-5 overflow-hidden bg-center bg-cover border group bg-primary-50 border-slate-400"
    style="background-image: url({{ $img }})">
    <div class="transition duration-300 bg-center bg-cover fill-parent group-hover:scale-110"
        style="background-image: url({{ $img }})"></div>
</a>
<div class="col-span-7 py-2">
    @if (isset($post->whisper))
    {{ $post->whisper }}
    @else
    <div class="flex gap-1 mb-4 text-xs text-slate-500">
        <div>{{ now()->format('F jS, Y') }}</div>
        <div>•</div>
        <div>{{ rand(3, 20) }} min read</div>
    </div>
    @endif
    <div
        class="mb-4 prose-sm prose prose-a:no-underline hover:prose-a:underline prose-headings:font-serif prose-headings:font-normal">
        <h3>
            <a href="/post" title="{{ $post->title }}" class="block">{{ Str::limit($post->title, 50) }}</a>
        </h3>
    </div>
    @if (isset($excerpt))
    {{ $excerpt }}
    @else
    <p class="mb-4 text-sm text-slate-500">{{ Str::limit($post->excerpt, 80) }}</p>
    @endif

    @if (isset($post->tags))
    <div class="flex gap-1 mb-4 text-xs text-slate-500">
        @foreach ($tags->random(rand(1,3)) as $tag)
        <div class="px-[0.4rem]  px- text-xs border rounded-full border-slate-400">
            {{ $tag['text'] }}</div>
        @endforeach
    </div>
    @endif
</div>