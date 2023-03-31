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
@endphp


{{-- <div>
    <input type="text" placeholder="Search for services"
        class="block w-full px-12 py-6 pl-24 text-2xl border rounded-full peer border-slate-500">
    <x-heroicon-o-magnifying-glass
        class="absolute w-12 h-12 pointer-events-none peer-focus:text-primary left-6 top-4 text-slate-300" />
</div> --}}

<div class="mb-8">
    <input type="text" placeholder="Search for services"
        class="block w-full py-6 pl-16 text-2xl font-light bg-transparent border-b focus:outline-none placeholder:text-slate-400 placeholder:font-light peer border-slate-400">
    <x-heroicon-o-magnifying-glass
        class="absolute left-0 w-12 h-12 pointer-events-none peer-focus:text-primary top-4 text-slate-300" />
</div>


{{-- <h4 class="pt-12 pb-2 mb-4 border-b text-slate-400 border-slate-400">Common searches</h4> --}}
<h4 class="mb-2 text-xs text-slate-500">Common searches:</h4>
<x-tag-list :tags="$services->random(8)" />

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