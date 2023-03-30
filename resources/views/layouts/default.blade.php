@php
$links = [
'Patient Resources' => [
'Directions & Parking',
'Billing Information',
'Medical Records',
'Patient Portal',
'View More',
],
'Medical Services' => [
'Cancer Care',
'Cardiology',
'Labor & Delivery',
'Orthopedics',
'Plastic Surgery & Aesthetics',
'View All Services',
],
// 'Our Doctors' => [],
'Find a Location' => [
'Daytona Beach',
'Port Orange',
'Deltona',
],
'For Medical Professionals' => [
'Careers',
'Residency & Fellowship',
'Medical Staff Services',
'Physician Opportunites',
'Radiograph Program',
'Referrals',
],
];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->meta_title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Noto+Serif+Display:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    @include('layouts.default.partials.header')
    @yield('content')
    @include('layouts.default.partials.footer')
</body>

</html>