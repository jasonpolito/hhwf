<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>{{ $page->meta_title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
          rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <div>
        @if (request()->input('alert'))
            <div class="sticky top-0 py-6 text-white bg-primary" x-data="{ show: true, open: false }" x-show="show">
                <x-container>
                    <div class="flex justify-between text-lg">
                        <div class="flex gap-4">
                            <div>
                                <x-heroicon-o-exclamation-triangle class="w-8 h-8" />
                            </div>
                            <div>
                                <div class="flex items-center gap-4 cursor-pointer hover:underline"
                                     @click="open = !open">
                                    <div>What patients and communities need to know about COVID-19, the vaccines,
                                        and staying safe.</div>
                                    <div>
                                        <x-heroicon-o-chevron-down class="w-6 h-6" />
                                    </div>
                                </div>

                                <div class="py-8" x-show="open">
                                    <div class="prose prose-white">
                                        <p>{{ fake()->paragraph() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="block transition text-primary-200 hover:text-white"
                           @click.prevent="show = false">
                            <x-heroicon-o-x-mark class="w-8 h-8" />
                        </a>
                    </div>
                </x-container>
            </div>
        @endif
        <div class="bg-white">@include('layouts.default.partials.header')</div>
    </div>
    @yield('content')
    @include('layouts.default.partials.footer', [
        'reverse' => $reverse ?? false,
        'hidden' => $hidden ?? [],
    ])
    @vite('resources/js/app.js')

</body>

</html>
