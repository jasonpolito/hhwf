@php
$tags = collect(['News', 'Article', 'Blog', 'Event', 'Podcast', 'Press Release', 'Uncategorized',
'Video'])->shuffle()->toArray();
$posts = [
'Let\'s talk about colon health!' => [
'img' => 'holdinghandsjpg.jpeg',
'tags' => [
'Podcast',
'Press Release'
],
],
'Halifax Health | Brooks Rehabilitation Community Programs' => [
'img' => 'kayak.jpg',
'tags' => [
'Podcast',
'Press Release'
]
],
'Andrea Forster Named First Diabetes Navigator' => [
'img' => 'andrea.jpg',
'tags' => [
'Podcast',
'Press Release'
]
],
'Halifax Health – Hospice to Host 4th Annual Rick Zimmer Jr. Memorial Golf Tournament to Benefit Traumatic Loss Program'
=> [
'img' => 'golf.jpg',
'tags' => [
'Podcast',
'Press Release'
]
]
]
@endphp


<x-section class="bg-primary-50">
    {{-- <x-section class="border-t border-slate-300"> --}}
    <x-container>
        <div class="flex flex-wrap justify-between gap-16 lg:flex-nowrap">
            <div class="w-full lg:w-1/3">
                <x-text class="mb-12">
                    <h2>Stay connected with the community.</h2>
                    <p>Read with the latest news, events, and announcements from our team at Halifax Health
                        and our
                        community.</p>
                    <div class="flex items-center gap-6 pt-6 text-base not-prose">
                        <div>

                            <x-btn class="text-white bg-primary">
                                <span>All Articles</span>
                                <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                            </x-btn>
                        </div>
                    </div>
                </x-text>
                <div>
                    <h4 class="mb-2 text-xs text-slate-500">Popular topics:</h4>
                    <x-tag-list :$tags />
                    <x-dev-note>Again, quick access (random for dev)</x-dev-notw>
                </div>
            </div>
            <div class="w-full lg:w-2/3 xl:w-1/2">
                <ul>
                    @foreach ($posts as $title => $info)
                    @php
                    $record = [
                    'title' => $title,
                    'img' => $info['img']
                    ];
                    @endphp
                    <li>
                        <x-record-preview :$record>
                            <x-slot name="extra">
                                <div class="flex justify-between gap-2 text-xs text-slate-500">
                                    <div>{{ now()->subdays($loop->index * 2)->format('F jS, Y') }}</div>
                                    <ul class="flex gap-1 text-xs">
                                        @foreach (collect($tags)->random(rand(1,3)) as $tag)
                                        @if (!$loop->first)
                                        <li>•</li>
                                        @endif
                                        <li>
                                            {{ $tag }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </x-slot>
                        </x-record-preview>
                        @if ($loop->index == 1)
                        <x-dev-note>I figure news (blog) and events can be treated the same just tagged differently
                            –– events could just have an additional block to show the details</x-dev-note>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </x-container>
</x-section>