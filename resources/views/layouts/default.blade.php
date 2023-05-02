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
    <div class="py-6 text-white bg-primary">
        <x-container>
            <div class="flex justify-center">
                <x-cols>
                    <x-col>This an alert banner thing</x-col>
                </x-cols>
            </div>
        </x-container>
    </div>
    @include('layouts.default.partials.header')
    @yield('content')
    @include('layouts.default.partials.footer', [
        'reverse' => $reverse ?? false,
        'hidden' => $hidden ?? [],
    ])
    @vite('resources/js/app.js')

</body>

</html>
