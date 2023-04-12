<x-section class="bg-primary-50">
    <x-container>
        <x-cols class="justify-between" :$gap>
            <x-col class="lg:w-1/2" :$gap>
                <x-text class="mb-12">
                    <h2>Stay connected with<br>the community.</h2>
                    <p>Keep up with the latest news, events, and announcements from our team at Halifax Health
                        and our
                        community.</p>
                    <div class="flex items-center gap-6 pt-6 text-base not-prose">
                        <div>

                            <x-btn class="text-white bg-primary" :url="route('pages.blog.index')">
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
            </x-col>
            <x-col class="lg:w-1/2" :$gap>
                <x-post-card-list :records="$posts->shuffle()->random(3)" />
            </x-col>
        </x-cols>
    </x-container>
</x-section>