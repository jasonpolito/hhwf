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

<x-section class="bg-primary-50">
    <x-container>
        <div class="flex flex-wrap justify-between gap-16 lg:flex-nowrap">
            <div class="w-full lg:w-1/3">
                <x-text>
                    <h2>Find the exact service for you.</h2>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                </x-text>
                <div class="flex pt-12">
                    <x-btn class="text-white bg-primary">
                        <span>All Services</span>
                        <x-heroicon-o-arrow-long-right class="w-6 h-6 transition group-hover:translate-x-2" />
                    </x-btn>
                </div>
            </div>
            <div class="w-full lg:w-2/3 xl:w-1/2">

                <div>
                    <div class="mb-8">
                        <input type="text" placeholder="Search for services"
                            class="block w-full py-6 pl-16 text-2xl font-light bg-transparent border-b focus:outline-none placeholder:text-slate-400 placeholder:font-light peer border-slate-400">
                        <x-heroicon-o-magnifying-glass
                            class="absolute left-0 w-12 h-12 pointer-events-none peer-focus:text-primary top-4 text-slate-300" />
                        <x-dev-note>
                            Allow user to search for services directly from here
                        </x-dev-note>
                    </div>
                    <div>
                        <h4 class="mb-2 text-xs text-slate-500">Common searches:</h4>
                        <x-tag-list :tags="$services->random(8)" />
                        <x-dev-note>
                            Again, providing quick access to common stuff (random for dev)
                        </x-dev-note>

                    </div>
                </div>
            </div>
        </div>
    </x-container>
</x-section>