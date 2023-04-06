@props(['records'])
<ul class="grid grid-rows-{{ count($records) }} gap-6">
    @foreach ($records as $post)
    <li class="grid grid-cols-12 row-span-1 gap-6">
        <x-post-card :$post />
    </li>
    @endforeach
</ul>