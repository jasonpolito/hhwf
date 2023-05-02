@php
    $page = (object) [
        'meta_title' => 'Halifax Health Wireframes - Single Doctor',
    ];
    $gutter = 3;
    $name = Str::of($doctors->random(1)->first())->explode(PHP_EOL);
    $img = asset('assets/img/docs/doc' . rand(1, 10) . '.jpg');
@endphp

@extends('layouts.default')
@section('content')
    <x-section style="padding-top: 0">
        {{-- <div class="pt-16"></div> --}}
        <x-container>
            <div class="grid grid-cols-3">
                <div class="col-span-1 row-span-3 bg-cover border-l border-slate-400"
                     style="background-image: url({{ $img }}); background-position: center top"></div>
                <div class="col-span-2 row-span-2 p-16 text-white bg-slate-900">

                    @php
                        $stars = rand(3, 5);
                    @endphp
                    <ul class="flex items-center gap-1 mb-2">
                        @for ($i = 0; $i < $stars; $i++)
                            <li>
                                <x-heroicon-s-star class="w-6 h-6" />
                            </li>
                        @endfor
                        @for ($i = 0; $i < 5 - $stars; $i++)
                            <li>
                                <x-heroicon-s-star class="w-6 h-6 text-slate-700" />
                                @if (!$i)
                                    <div class="absolute top-0 left-0 w-3 overflow-hidden">
                                        <x-heroicon-s-star class="w-6 h-6" />
                                    </div>
                                @endif
                            </li>
                        @endfor
                    </ul>
                    <div class="pt-6 mb-8 prose prose-base prose-white prose-headings:font-serif prose-headings:font-light">
                        <h1>{{ implode(', ', $name->toArray()) }}</h1>
                    </div>
                    <x-cols>
                        <x-col class="lg:w-1/3">
                            <x-whisper class="pb-4 mb-4 border-b border-slate-800">Primary Specialty</x-whisper>
                            <p>Neurology</p>
                        </x-col>
                        <x-col class="lg:w-2/3">
                            <x-whisper class="pb-4 mb-4 border-b border-slate-800">Primary Location</x-whisper>
                            <p class="font-light"><a href="{{ route('pages.locations.show') }}"
                                   class="decoration-slate-300 decoration-1 hover:underline">{{ $locations->random(1)->first()['title'] }}</a>
                            </p>
                        </x-col>
                    </x-cols>
                </div>

                <a href="{{ route('pages.schedule.index') }}" class="col-span-2 py-8 text-xl group bg-primary-50 px-14">
                    <div class="flex items-center justify-between gap-16">
                        <h3 class="decoration-slate-300 group-hover:underline">Schedule an appointment with
                            {{ $name[0] }}
                        </h3>
                        <x-heroicon-o-arrow-long-right
                                                       class="w-12 h-12 transition group-hover:translate-x-2 group-focus:translate-x-2" />
                        <x-dev-note>Focus secondary actions</x-dev-note>

                    </div>
                </a>
            </div>
            <x-cols class="pt-16">
                <x-col class="lg:w-1/2">
                    <x-whisper class="pb-4 mb-10 border-b border-slate-400">About</x-whisper>
                    <div class="prose prose-base prose-headings:font-serif">
                        <h3><strong>Education &amp; Fellowship</strong></h3>
                        <ul>
                            <li>Barrow Neurological Institute, Phoenix, AZ – Complex Spinal Surgery Fellowship</li>
                            <li>Barrow Neurological Institute, Phoenix, AZ – Endovascular Neurosurgery Fellowship</li>
                            <li>Barrow Neurological Institute, Phoenix, AZ – Cerebrovascular/Skull Base Surgery Fellowship
                            </li>
                        </ul>
                        <h3><strong>Residency</strong></h3>
                        <p><strong>Barrow Neurological Institute – Neurological Surgery Residency</strong><br> Phoenix,
                            AZ</p>
                        <h3><strong>Internship</strong></h3>
                        <p><strong>Good Samaritan Regional Medical Center</strong><br> Corvallis, OR</p>
                        <h3><strong>Clinical Interest:</strong></h3>
                        <ul>
                            <li>Intracranial aneurysms</li>
                            <li>Intracranial arteriovenous malformation</li>
                            <li>Brain tumors</li>
                            <li>Glioblastoma multiforme</li>
                            <li>Meningioma</li>
                            <li>Metastatic brain tumor</li>
                            <li>Pituitary adenoma</li>
                            <li>Carotid stenosis</li>
                            <li>Cervical myelopathy</li>
                            <li>Cervical radiculopathy</li>
                            <li>Cervical herniated disc</li>
                            <li>Lumbar stenosis</li>
                            <li>Lumbar radiculopathy</li>
                            <li>Lumbar herniated disc</li>
                        </ul>
                        <h3><strong>Procedures Performed:</strong></h3>
                        <ul>
                            <li>Cerebral angiography</li>
                            <li>Coil embolization</li>
                            <li>Stereotactic radiosurgery</li>
                            <li>Craniotomy and clipping of aneurysm</li>
                            <li>Cervical disk replacement with mobi-c system</li>
                            <li>Lumbar artificial disc replacement with prodisc-c system</li>
                            <li>Anterior cervical discectomy and fusion and plating</li>
                            <li>Lumbar microdiscectomy</li>
                            <li>Lumbar laminectomy</li>
                            <li>Craniotomy resection of brain tumor</li>
                        </ul>
                        <p>Dr. Patrick Han graduated from the University of Kansas Medical School in 1997. He then
                            completed his neurosurgical residency at the Barrow Neurological Institute in Phoenix, AZ.
                            He performed fellowships in Cerebrovascular Neurosurgery, Endovascular Neurosurgery and
                            Complex Spine Surgery at the Barrow Neurological Institute.</p>
                        <p>After completion of his residency and fellowships, he accepted a position as Assistant
                            Professor at the University of Louisville in the Department of Neurosurgery in 2005. He then
                            accepted a position as Medical Director of the St. John Neuroscience Institute in 2006.</p>
                        <p>He is currently the Medical Director of the University of Florida Health, Department of
                            Neurosurgery at Halifax Health Medical Center. Dr. Han’s clinical interests include brain
                            aneurysms, brain arteriovenous malformations, cavernous malformations, brain tumors, carotid
                            stenosis as well as cervical and lumbar spine surgeries, which includes but is not limited
                            to artificial cervical and lumbar disc surgery for motion preservation disc replacement. He
                            has training in clipping and coil embolization of aneurysms, as well as carotid
                            endarterectomy and stenting.</p>
                    </div>
                </x-col>
                <x-col class="lg:w-1/2">
                    <x-whisper class="pb-4 mb-10 border-b border-slate-400">Specialties</x-whisper>
                    @php
                        $items = $services->random(rand(3, 8))->map(function ($item) {
                            return $item;
                        });
                    @endphp
                    <div class="mb-16">
                        <x-tag-list :$items />
                    </div>

                    <x-whisper class="pb-4 mb-4 border-b border-slate-400">Locations</x-whisper>
                    @include('pages.locations.partials.grid', ['count' => rand(1, 2), 'cols' => 2])
                    <div class="sticky top-0 pt-8 -mt-8">
                        <x-whisper class="pb-4 mb-8 border-b border-slate-400">Schedule Appointment</x-whisper>
                        <div class="grid grid-cols-3">
                            <div class="col-span-1 row-span-2 bg-cover border border-slate-400"
                                 style="background-image: url({{ $img }}); background-position: center top;"></div>
                            <div class="col-span-2 p-8 text-white bg-slate-900">
                                <div class="mb-4 font-serif text-xl">{{ implode(', ', $name->toArray()) }}</div>
                                @php
                                    $stars = rand(3, 5);
                                @endphp
                                <ul class="flex items-center gap-1">
                                    @for ($i = 0; $i < $stars; $i++)
                                        <li>
                                            <x-heroicon-o-star class="w-6 h-6" />
                                        </li>
                                    @endfor
                                    @for ($i = 0; $i < 5 - $stars; $i++)
                                        <li>
                                            <x-heroicon-o-star class="w-6 h-6 text-slate-700" />
                                            @if (!$i)
                                                <div class="absolute top-0 left-0 w-3 overflow-hidden">
                                                    <x-heroicon-o-star class="w-6 h-6" />
                                                </div>
                                            @endif
                                        </li>
                                    @endfor
                                </ul>

                            </div>
                            <a href="{{ route('pages.schedule.index') }}" class="col-span-2 px-8 py-6 group bg-primary-50">
                                <div class="flex items-center justify-between gap-16">
                                    <h3 class="decoration-slate-300 group-hover:underline">Schedule appointment today
                                    </h3>
                                    <x-heroicon-o-arrow-long-right
                                                                   class="w-8 h-8 transition group-hover:translate-x-2 group-focus:translate-x-2" />
                                </div>
                            </a>
                        </div>
                        {{-- <div class="flex">
                            <x-btn class="text-white bg-primary" :url="route('pages.locations.index')">
                                <span>Schedule Appointment</span>
                                <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                            </x-btn>
                        </div> --}}
                    </div>
                </x-col>
            </x-cols>
        </x-container>
    </x-section>
@endsection
