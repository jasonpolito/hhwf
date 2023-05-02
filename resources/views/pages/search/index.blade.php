@php
    $page = (object) [
        'meta_title' => 'Halifax Health Wireframes - Search Index',
    ];
    $q = request()->input('q');
@endphp

@extends('layouts.default')

@section('content')
    <x-section>
        <x-container>
            <x-text class="mb-4">
                <h1>
                    Search
                    @if ($q)
                        for <b class="italic text-primary">{{ $q }}</b>
                    @endif

                </h1>
            </x-text>
            <x-cols class="justify-between">
                <x-col class="lg:w-1/2">
                    <form>
                        <div class="mb-8">
                            <input value="{{ $q }}" name="q" type="text"
                                   placeholder="Search Halifax Health for..."
                                   class="block w-full py-6 pl-16 text-2xl font-light bg-transparent border-b peer border-slate-400 placeholder:font-light placeholder:text-slate-400 focus:outline-none">
                            <x-heroicon-o-magnifying-glass
                                                           class="absolute left-0 w-12 h-12 pointer-events-none top-4 text-slate-300 peer-focus:text-primary" />
                        </div>
                        <div>
                            <h4 class="mb-2 text-xs text-slate-500">Common searches:</h4>
                            <x-tag-list :items="$services->random(8)" />
                        </div>
                    </form>
                </x-col>
                <x-col class="lg:w-2/3 xl:w-1/2">
                </x-col>
            </x-cols>
        </x-container>
    </x-section>
@endsection
