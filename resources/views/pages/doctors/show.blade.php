@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes - Single Doctor'
];
$gutter = 3;
$name = Str::of($doctors->random(1)->first())->explode(PHP_EOL);
@endphp

@extends('layouts.default')
@section('content')
    <div class="py-16">
        <x-container>
            <div class="grid items-center grid-cols-3 grid-rows-2 gap-x-16 gap-y-8">
                <div class="h-full row-span-2 bg-center bg-cover border border-slate-400" style="background-image: url({{ asset('assets/img/docs/doc' . rand(1,10) . '.jpg') }})">
                    {{-- <div class="fill-parent bg-gradient-to-b from-transparent via-transparent to-primary mix-blend-overlay"></div> --}}
                </div>
                <div class="col-span-2 row-span-1 pt-8">
                    <x-text class="">
                        <h1><span class="block text-2xl">{{ $name[1] }}</span> {{ $name[0] }}</h1>
                    </x-text>
                    <p class="my-8 text-lg">{!! Str::of($locations->random(1)->first()['addr'])->replace('<br>', ', ') !!}</p>
                </div>
                <div class="col-span-2 row-span-1">
                    <x-cols>
                        <x-col class="mb-6 lg:w-1/2">
                            <x-whisper class="pb-2 mb-6 border-b border-slate-400">Services</x-whisper>
                            <x-tag-list :items="$services->random(rand(1,3))" />
                        </x-col>
                        <x-col class="mb-6 lg:w-1/2">
                            <x-whisper class="pb-2 mb-6 border-b border-slate-400">Locations</x-whisper>
                            <x-tag-list :items="$locations->random(rand(1,2))" />
                        </x-col>
                    </x-cols>
                </div>
            </div>
        </x-container>
    </div>
@include('layouts.default.partials.appointment')
@endsection