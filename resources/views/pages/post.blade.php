@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes - Single Post'
]
@endphp

@extends('layouts.default', ['reverse' => true])

@section('content')

<x-section style="padding-bottom: 0">
    <x-container>
        <div class="flex gap-2 mb-6 -mt-6">
            <div>{{ now()->format('j F Y') }}</div>
            <div>•</div>
            <div>5 min read</div>
        </div>
        <x-text>
            <h1>Reducing Fall Risk At Home: A Perspective For Cancer Survivors</h1>
        </x-text>
        <x-cols class="pt-8">
            <x-col class="md:w-2/3">
                <x-text>
                    <p>The National Institute on Aging reports that 6 out of every 10 falls occur inside the home.
                        Having a fall can be troublesome for most, but cancer survivors can have heightened
                        complications from a fall. </p>
                </x-text>
            </x-col>
        </x-cols>
        {{-- <div class="flex gap-2 mt-6 mb-4">
            <div>{{ now()->format('j F Y') }}</div>
        <div>•</div>
        <div>12 min read</div>
        </div> --}}
    </x-container>
</x-section>
<x-hero class="my-12 md:my-16 xl:my-24" :hide-gradient="true" :img="asset('assets/img/cardiac.jpg')">
    <div class="py-40"></div>
</x-hero>
<x-section style="padding-top: 0">
    <x-container>
        <x-cols>
            <x-col class="md:w-2/3">
                <x-text>
                    <h3><strong>What’s Involved in Cardiac Rehab? </strong></h3>

                    <p>We’re committed to a recovery plan that strengthens your heart and changes your life. Our skilled
                        specialists provide ongoing support through heart disease education, customized exercise plans
                        and one-on-one and group counseling.</p>

                    <p>When you begin <a data-entity-substitution="ahs_content" data-entity-type="node"
                            data-entity-uuid="9f38a6f4-0025-409a-80eb-2d52840f1406"
                            href="/blog/what-cardiac-rehab-and-how-can-it-help"
                            title="What is Cardiac Rehab and How Can it Help?"
                            data-once="AhsJsAnchorLinks AhsMicrositesNonMsPage">cardiac rehab</a>, we’ll help you
                        establish a plan that’s tailored to your lifestyle. We’ll help you regain strength, provide
                        preventive care, reduce your risk of heart health issues in the future and improve your overall
                        quality of life.</p>

                    <p>First, you’ll begin with a medical evaluation to check your physical abilities, limitations and
                        medical conditions. Here, we’ll ensure each step is safe and effective for you. With a
                        combination of low-impact exercise, such as walking, rowing or light jogging, your health care
                        team will teach you techniques to improve your physical health.</p>

                    <p>You’ll also receive lifestyle education and support, such as teaching you how to follow a
                        heart-healthy diet and supporting you to successfully quit smoking, if need be. If you have <a
                            data-entity-substitution="ahs_content" data-entity-type="node"
                            data-entity-uuid="460aea63-2706-4288-8b56-47b9e13219d2"
                            href="/blog/know-your-risk-high-blood-pressure-diabetes"
                            title="Know Your Risk: High Blood Pressure With Diabetes"
                            data-once="AhsJsAnchorLinks AhsMicrositesNonMsPage">high blood pressure, diabetes</a> or
                        high cholesterol, your team of experts will also provide guidance on how to best manage and
                        treat these conditions.</p>

                    <p>Along with a serious medical condition or recent surgery may also come mixed emotions, anxiety or
                        depression. With cardiac rehab, you’ll also receive counseling support to check in on your <a
                            data-entity-substitution="ahs_content" data-entity-type="node"
                            data-entity-uuid="66b48733-b233-425a-af2c-d8bdc65816fb"
                            href="/blog/mind-over-matter-taking-care-your-mental-health"
                            title="Mind Over Matter: Taking Care of Your Mental Health"
                            data-once="AhsJsAnchorLinks AhsMicrositesNonMsPage">mental health</a> and help you get back
                        to feeling your best.</p>

                    <p> </p>

                    <h3><strong>Who Needs Cardiac Rehab?</strong></h3>

                    <p>Cardiac rehab is a long-term program that varies for each person. Some people may see results
                        sooner than others, and that’s perfectly OK. Our goal at the program’s completion is to see you
                        gain the tools and education you need to lead a happy, healthy lifestyle.</p>

                    <p>Several factors determine if you’re a good fit for cardiac rehabilitation, such as:</p>

                    <ul>
                        <li>You had a <a data-entity-substitution="ahs_content" data-entity-type="node"
                                data-entity-uuid="670f28d3-746f-48a9-aaef-de1095b4a044"
                                href="/blog/cardiac-arrest-vs-heart-attack-know-signs-save-a-life"
                                title="Cardiac Arrest vs. Heart Attack: Know the Signs to Save a Life"
                                data-once="AhsJsAnchorLinks AhsMicrositesNonMsPage">heart attack</a> within the past
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
                <div class="pt-16"></div>
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
            </x-col>
            <x-col class="w-1/3">
            </x-col>
        </x-cols>
    </x-container>
</x-section>
{{-- <x-container>
    <div class="border-b border-slate-400"></div>
</x-container> --}}

@endsection