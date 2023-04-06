@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes - Single Post'
];;
@endphp

@extends('layouts.default', ['reverse' => true])

@section('content')

<x-section style="padding-bottom: 0">
    <x-container>
        <x-cols>
            <x-col>
                <div class="flex gap-2 mb-6 md:-mt-6">
                    <div>{{ now()->format('F jS, Y') }}</div>
                    <div>•</div>
                    <div>5 min read</div>
                </div>
                <x-text>
                    {{-- <h1>{{ fake()->sentence }}</h1> --}}
                    <h1>Volusia County Hosts Largest Ever American Diabetes Association State of Diabetes Conference
                    </h1>
                </x-text>
            </x-col>
            <x-col class="pt-8 lg:w-2/3">
                <x-text>
                    {{-- <p>{{ fake()->paragraph }}</p> --}}
                    <p>The largest State of Diabetes the American Diabetes Association has ever held in the United
                        States took place in Volusia County. This year’s event held at
                        the
                        Ocean Center had over 500 attendees, 25 vendors and 12 guest speakers. </p>
                </x-text>
            </x-col>
        </x-cols>
    </x-container>
</x-section>
<x-hero class="my-12 md:my-16 xl:my-18" :hide-gradient="true" img="{{ asset('assets/img/postimage.jpg') }}">
    <div class="sm:py-20 lg:py-32 xl:py-40"></div>
</x-hero>
<x-section style="padding-top: 0">
    <x-container>
        <x-cols class="justify-between">
            <x-col class="lg:w-2/3">
                <x-text>
                    <p>The American Diabetes Association State of Diabetes is a community event that features panel of
                        experts who lead a discussion on patient education related to diabetes management, prevention
                        and overall health and wellness. The event also included free eye screenings, flu shots and an
                        expert to help attendees know their health numbers and risks which could keep them from living
                        life to the fullest. Presenting sponsors included The Lohman Center for Diabetes and
                        Endocrinology at Halifax Health and Lowell & Nancy Lohman. Premier sponsors included Bank of
                        America, Walgreens, Florida Blue, Florida Retina Institute, Sanofi, and Novo Nordisk.</p>
                    <h3>Take-aways</h3>
                    <p>“There were so many amazing take-aways,” said John Guthrie. “Our keynote Presenter Chris Ruden, a
                        world record holding powerlifter who was born with a birth defect and later diagnosed with type
                        1 diabetes, shared his message of thriving with diabetes by overcoming adversity by practicing
                        mastering change management. I think attendees left with a fresh perspective on the choices we
                        can make based on the situations we experience.” </p>
                    <blockquote>“This was an opportunity for community members and caregivers from across central
                        Florida to get
                        together for the latest news on treatments and technology for diabetes. The Volusia County
                        community came together to be proactive and lead the fight against diabetes. The ADA is pleased
                        to host this annual event in Volusia County with Halifax Health and the Lohman Center for
                        Diabetes and Endocrinology” – Mica Lill.</blockquote>
                    <p>Program presenters covered all aspects of diabetes care including audiology, neuropathy, oral
                        health, would care, eye care and cardiovascular care. New diabetes technology including insulin
                        pumps and continuous glucose monitoring devices as well as basic diabetes care and nutrient
                        basics were including in the all-day conference as well as a focus on mind, body, and spirit.
                    </p>
                    <h3>The Lohman Diabetes Center</h3>
                    <p>The Lohmans presented the American Diabetes Association with a $100,000 donation at the
                        conference. “November is national diabetes awareness month,” said Lowell Lohman, who plans to
                        continue his and his wife Nancy’s efforts to help those with Diabetes receive clinical care and
                        educational support. “Our vision for The Lohman Center for Diabetes includes endocrinology
                        clinical care, nutrition and education and community outreach,” Nancy Lohman added. </p>
                    <p>This was the third conference The Lohman Diabetes Center has held for the benefit of all
                        community members. Since its founding the Lohman Center for Diabetes and Endocrinology at
                        Halifax Health has been responsible for seeing over 1,200 patients diagnosed with diabetes,
                        providing diabetes education classes and supported community outreach. The center is growing
                        with the need and plans to add a Nurse Navigator, Advanced Practice Registered Nurse and a
                        second endocrinologist.</p>
                    <p>According to Lowell Lohman, “We poked the 800 pound gorilla (Halifax Health) and they are working
                        with us to help as many people with diabetes as we can.”</p>
                    <p>For information about diabetes and the Lohman Center for Diabetes and Endocrinology:</p>
                    <p><strong>Call – 386.425.DIAB, or visit them on the web at halifaxhealth.org/diabetes</strong></p>
                    <ul>
                        <li>Mica Lill, Executive Director, Florida – American Diabetes Association</li>
                        <li>Mobile: 386-405-9889, MLill@diabetes.org</li>
                    </ul>
                    <ul>
                        <li>John Guthrie, Vice President Communications – Halifax Health</li>
                        <li>Mobile: 386-233-5768, john.guthrie@halifax.org</li>
                    </ul>
                </x-text>
                <div class="flex pt-8">
                    <x-btn class="text-white bg-primary" url="/service">
                        <span>Learn more about Diabetes</span>
                        <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                    </x-btn>
                </div>
                <div class="py-16">
                    <h4 class="mb-2 text-xs text-slate-500">Tagged as:</h4>
                    <x-tag-list :tags="$tags->random(rand(2,5))" />
                </div>
            </x-col>
            <x-col class="lg:w-1/3">
                <div class="sticky top-0 pt-8 -mt-8">
                    <h4 class="pt-3 text-xs text-slate-500">Related content:</h4>
                    <ul>
                        @foreach ($posts as $record)
                        <li class="my-8">
                            <x-record-preview :$record :hide-image="true" :title-size="'base'">
                                <x-slot name="extra">
                                    <div class="flex gap-1 text-xs text-slate-500">
                                        <div>{{ now()->subdays($loop->index * 2)->format('F jS, Y') }}</div>
                                        <div>•</div>
                                        <div>{{ rand(3, 20) }} min read</div>
                                    </div>
                                </x-slot>
                            </x-record-preview>
                        </li>
                        @endforeach
                        <li class="mb-12">
                            <x-record-preview :hide-image="true" :title-size="'base'"
                                :record="['title' => 'View more articles', 'url' => '/blog']">
                            </x-record-preview>
                        </li>
                    </ul>
                </div>
            </x-col>
        </x-cols>
    </x-container>
</x-section>
{{-- <x-container>
    <div class="border-b border-slate-400"></div>
</x-container> --}}

@endsection