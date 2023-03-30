@php
$services = collect([
"Adult Behavioral Services",
"Amputee Clinic",
"Cancer Care",
"Cardiac and Pulmonary Rehabilitation",
"Cardiology",
"Care For Women",
"Child & Adolescent Behavioral Services",
"Continuing Care",
"Diabetes Education & Prevention",
"Emergency Services",
"Endocrinology",
"Eye Care",
"Halifax Health Foundation",
"Hand Surgery",
"Healthy Living Centers",
"Heart and Vascular",
"Human Resources",
"Hyperbaric Medicine",
"Labor & Delivery",
"Laboratory",
"Lung Care",
"Minimally Invasive Cardiac Surgery",
"Modified Barium Swallow Test",
"Nephrology",
"Neurosciences",
"OBGYN Hospitalists",
"Orthopedics",
"Pain Medicine",
"Partnerships",
"Pediatrics",
"Plastic Surgery and Aesthetics",
"Primary Care",
"Radiology",
"Rehabilitation",
"Robotics",
"Supportive Care",
"Surgical Weight Loss",
"Transplant Services",
"Trauma Surgery",
"Urgent Care",
"Urology",
"Volunteer Opportunities",
"Weight Management",
"Wellness & Fitness Center",
"Wound Care & Hyperbaric Medicine",
]);
// $grouped = $services->groupBy(function($item,$key) {
// return $item[0]; //treats the name string as an array
// })
// ->sortBy(function($item,$key){ //sorts A-Z at the top level
// return $key;
// });
@endphp


<div>
    <input type="text" placeholder="Search for services"
        class="block w-full px-12 py-6 pl-24 text-2xl border rounded-full peer border-slate-300">
    <x-heroicon-o-magnifying-glass
        class="absolute w-12 h-12 pointer-events-none peer-focus:text-primary left-6 top-4 text-slate-300" />
</div>

<ul class="pt-4 text-xs">
    @foreach ($services->random(8) as $item)
    <li class="inline-block mb-2 mr-1">
        <a href="#"
            class="block px-3 py-2 bg-transparent border rounded-full hocus:bg-white hocus:text-slate-800 text-slate-500 border-slate-500">{{ $item }}</a>
    </li>

    @endforeach
</ul>

{{-- 
<ul class="flex gap-8">
    @foreach (array_chunk($services, ceil(count($services) / 2)) as $batch)
    <li class="w-1/2">
        <ul>
            @foreach ($batch as $item)
            <li><a href="#" class="block px-3 py-1 -mx-3">{{ $item }}</a></li>
@endforeach
</ul>
</li>
@endforeach
</ul> --}}