@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes - Single Post'
];
$posts = [
// 'Let\'s talk about colon health!' => [
// 'img' => 'holdinghandsjpg.jpeg',
// 'tags' => [
// 'Podcast',
// 'Press Release'
// ],
// ],
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
];
@endphp

@extends('layouts.default', ['reverse' => true])

@section('content')

<x-section style="padding-bottom: 0">
    <x-container>
        <div class="flex gap-2 mb-6 md:-mt-6">
            <div>{{ now()->format('F jS, Y') }}</div>
            <div>•</div>
            <div>5 min read</div>
        </div>
        <x-text>
            <h1>{{ fake()->sentence }}</h1>
            {{-- <h1>Reducing Fall Risk At Home: A Perspective For Cancer Survivors</h1> --}}
        </x-text>
        <x-cols class="pt-8">
            <x-col class="lg:w-2/3">
                <x-text>
                    <p>{{ fake()->paragraph }}</p>
                    {{-- <p>The National Institute on Aging reports that 6 out of every 10 falls occur inside the home.
                        Having a fall can be troublesome for most, but cancer survivors can have heightened
                        complications from a fall. </p> --}}
                </x-text>
            </x-col>
        </x-cols>
    </x-container>
</x-section>
<x-hero class="my-12 md:my-16 xl:my-18" :hide-gradient="true"
    img="https://picsum.photos/seed/{{ rand(10,999) }}/1200/800">
    <div class="sm:py-20 lg:py-32 xl:py-40"></div>
</x-hero>
<x-section style="padding-top: 0">
    <x-container>
        <x-cols class="justify-between">
            <x-col class="lg:w-2/3">
                <x-text>
                    <p>If you’re recovering from a heart attack, heart disease or recent surgery, cardiac rehabilitation
                        may be your next step in the right direction. Cardiac rehab is an outpatient program that’s
                        customized to fit your needs through a combination of exercise and education.</p>
                    <h3><strong>What’s Involved in Cardiac Rehab? </strong></h3>

                    <p>We’re committed to a recovery plan that strengthens your heart and changes your life. Our skilled
                        specialists provide ongoing support through heart disease education, customized exercise plans
                        and one-on-one and group counseling.</p>

                    <p>When you begin <a href="#">cardiac rehab</a>, we’ll help you
                        establish a plan that’s tailored to your lifestyle. We’ll help you regain strength, provide
                        preventive care, reduce your risk of heart health issues in the future and improve your overall
                        quality of life.</p>


                    <p>You’ll also receive lifestyle education and support, such as teaching you how to follow a
                        heart-healthy diet and supporting you to successfully quit smoking, if need be. If you have <a
                            href="#">high blood pressure, diabetes</a> or
                        high cholesterol, your team of experts will also provide guidance on how to best manage and
                        treat these conditions.</p>

                    <img src="{{ asset('assets/img/doc1.jpg') }}" alt="">

                    <p>Along with a serious medical condition or recent surgery may also come mixed emotions, anxiety or
                        depression. With cardiac rehab, you’ll also receive counseling support to check in on your <a
                            href="#">mental health</a> and help you get back
                        to feeling your best.</p>

                    <p> </p>

                    <h3><strong>Who Needs Cardiac Rehab?</strong></h3>

                    <p>Cardiac rehab is a long-term program that varies for each person. Some people may see results
                        sooner than others, and that’s perfectly OK. Our goal at the program’s completion is to see you
                        gain the tools and education you need to lead a happy, healthy lifestyle.</p>

                    <p>Several factors determine if you’re a good fit for cardiac rehabilitation, such as:</p>

                    <ul>
                        <li>You had a <a href="#">heart attack</a> within the past
                            year</li>
                        <li>You’ve had heart surgery</li>
                        <li>You have angina</li>
                        <li>You have chronic stable heart failure (CHF) with an ejection fraction (EF) of less than 36%
                        </li>
                        <li>You’ve been diagnosed with heart disease and have a prescription for cardiac rehab from your
                            physician</li>
                        <li>You’ve had an angioplasty with or without a stent</li>
                    </ul>
                    <p> </p>

                    <h3><strong>Learn More About Cardiac Rehab</strong></h3>

                    <p>If you think you could benefit from cardiac rehab, <a href="/service">visit us here</a> to learn
                        more about
                        our cardiovascular care. We’ll work with you to monitor your physical improvements and numbers
                        like blood pressure, heart rhythm, and pulse and exertion levels. We’ll also provide solid
                        support with access to small-group discussions and more. </p>

                    <p>With our expert team of certified nurses, physiologists, counselors and dietitians, you’ll have
                        all the tools you need to recover so you can live your best life.</p>
                </x-text>
                <div class="py-16">
                    <h4 class="mb-2 text-xs text-slate-500">Tagged as:</h4>
                    @php
                    $tags = collect([
                    ['text' => 'News', 'url' => '#'],
                    ['text' => 'Article', 'url' => '#'],
                    ['text' => 'Blog', 'url' => '#'],
                    ['text' => 'Event', 'url' => '#'],
                    ['text' => 'Podcast', 'url' => '#'],
                    ['text' => 'Press Release', 'url' => '#'],
                    ['text' => 'Uncategorized', 'url' => '#'],
                    ['text' => 'Video', 'url' => '#'],
                    ])->shuffle()->random(rand(2,5))->toArray();
                    @endphp
                    <x-tag-list :$tags />
                </div>
            </x-col>
            <x-col class="lg:w-1/3">
                <div class="sticky top-0 pt-8 -mt-8">
                    <h4 class="pt-3 text-xs text-slate-500">Related content:</h4>
                    <ul>
                        @foreach ($posts as $title => $info)
                        @php
                        $tags = collect([
                        ['text' => 'News', 'url' => '#'],
                        ['text' => 'Article', 'url' => '#'],
                        ['text' => 'Blog', 'url' => '#'],
                        ['text' => 'Event', 'url' => '#'],
                        ['text' => 'Podcast', 'url' => '#'],
                        ['text' => 'Press Release', 'url' => '#'],
                        ['text' => 'Uncategorized', 'url' => '#'],
                        ['text' => 'Video', 'url' => '#'],
                        ])->shuffle()->toArray();
                        @endphp

                        @php
                        $record = [
                        'title' => $title,
                        'url' => '/post',
                        'img' => $info['img']
                        ];
                        @endphp
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