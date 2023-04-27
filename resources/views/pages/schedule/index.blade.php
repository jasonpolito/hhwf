@php
    $page = (object) [
        'meta_title' => 'Halifax Health Wireframes - Schedule Index',
    ];
    $gutter = 3;
    $links = ['Speakers Bureau', 'Halifax Health Board of Commissioners', 'Halifax Health Associates', 'DME Academy', 'Speediatrics', 'Code of Conduct & Quality Content', 'Halifax Health Leadership', 'Our History', 'Public Records', 'Testimonials', 'Board of Commissioners’ Meetings', 'Human Resources', 'Civil Rights Accommodation', 'Team Members and Retirees'];
    sort($links);
@endphp

@extends('layouts.default')

@section('content')
    <x-hero :img="asset('assets/img/desk.jpg')">
        <x-cols class="items-center" :$gutter>
            <x-col class="-mt-2 xl:w-2/3" :$gutter>
                <x-text class="prose-white prose-headings:leading-tight prose-p:font-light">
                    <h1>
                        Make an Appointment
                    </h1>
                </x-text>
            </x-col>
            {{-- <x-col class="-mt-2 xl:w-1/3" :$gutter>
                <p class="text-lg leading-loose text-white/80">If you are experiencing a medical emergency, <b
                       class="text-white">
                        please call
                        9-1-1
                    </b>. We cannot assist with emergency requests through this form.
                </p>
            </x-col> --}}
        </x-cols>
    </x-hero>
    @php
        $inputs = [
            ['First name', 'John', false], //
            ['Last name', 'Doe', false],
            ['Phone', '(555) 555-5555', false],
            ['Email', 'email@example.com', false],
            ['Select service(s)', 'Select service(s)', true],
            ['Select location(s)', 'Select location(s)', true],
            ['Insurance carrier', 'Allstate', false],
            ['How did you hear about us?', 'How did you hear about us?', false],
        ];
        $gutter = 4;
    @endphp
    <x-section>
        <x-container>
            <x-cols :gutter="6">
                <x-col class="-mt-36 md:w-2/3" :gutter="6">
                    <div class="p-16 bg-white border border-slate-400">
                        <x-cols :$gutter>
                            @foreach ($inputs as $input)
                                <x-col class="md:w-1/2" :$gutter>
                                    <x-text-input :searchable="$input[2]" :label="$input[0]" :placeholder="$input[1]" />
                                </x-col>
                            @endforeach
                        </x-cols>
                        <div class="flex mb-8">
                            <x-checkbox :checked="true" :id="uniqid()" text="Sign me up for future communication" />
                        </div>
                        <x-btn class="text-white bg-primary" :url="route('pages.schedule.index')">
                            Request Appointment
                        </x-btn>
                    </div>
                </x-col>
                <x-col class="-mt-16 md:w-1/3" :gutter="6">
                    <h3 class="py-4 mb-4 font-serif text-xl border-b border-slate-400">
                        In An Emergency?
                    </h3>
                    <div class="mb-8 prose">If you are experiencing a medical emergency, <b class="underline">
                            please call
                            9-1-1 immediately
                        </b>. We cannot assist with emergency requests through this form.
                    </div>
                    <h3 class="py-4 mb-4 font-serif text-xl border-b border-slate-400">
                        Medical Records Request
                    </h3>
                    <div
                         class="mb-8 prose prose-a:font-normal prose-a:text-primary prose-a:no-underline hover:prose-a:underline">
                        <a href="#">Authorization to Release Information Form</a>
                        <br>
                        <a href="#">Authorization to Release Information Form <i>(esp)</i></a>
                    </div>
                    <h3 class="py-4 mb-4 font-serif text-xl border-b border-slate-400">
                        For Job Seekers
                    </h3>
                    <div
                         class="prose prose-a:font-normal prose-a:text-primary prose-a:no-underline hover:prose-a:underline">
                        <a href="#">
                            Join our team! Apply here
                        </a>
                    </div>
                </x-col>
            </x-cols>
        </x-container>
    </x-section>
@endsection
