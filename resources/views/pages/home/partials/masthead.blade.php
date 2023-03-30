<div class="lg:container lg:mx-auto lg:px-12">
    <div class="pt-32 bg-center bg-cover lg:-mx-12"
        style="background-image: url({{ asset('assets/img/masthead.jpg') }})">
        <div class=" bg-gradient-to-b from-transparent via-[rgba(0,25,49,0.8)] to-primary-900">
            <div class="container px-8 pt-32 mx-auto pb-14 lg:px-12">
                <div class="flex items-center justify-between gap-8">
                    <div class="w-2/3 -mt-2">
                        <h1 class="font-serif text-5xl leading-snug text-white">Compassionate care is at the
                            heart of
                            everything
                            we do.
                        </h1>
                    </div>
                    <div>
                        @php
                        $links = [
                        'Schedule Appointment',
                        'Medical Records',
                        'Careers With Halifax Health',
                        ];
                        @endphp
                        <ul class="text-lg text-white">
                            @foreach ($links as $link)
                            <li class="border-t border-[rgba(255,255,255,.5)] first:border-none">
                                <a href="#"
                                    class="flex items-center justify-between gap-12 px-4 py-4 group hocus:underline">
                                    <span>{{ $link }}</span>
                                    <x-heroicon-o-chevron-right
                                        class="w-6 h-6 transition-transform group-hocus:translate-x-2" />
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>