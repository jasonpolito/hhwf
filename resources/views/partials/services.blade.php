@php
$services = collect([
['text' => "Adult Behavioral Services", 'url' => '/service'],
['text' => "Amputee Clinic", 'url' => '/service'],
['text' => "Cancer Care", 'url' => '/service'],
['text' => "Cardiac and Pulmonary Rehabilitation", 'url' => '/service'],
['text' => "Cardiology", 'url' => '/service'],
['text' => "Care For Women", 'url' => '/service'],
['text' => "Child & Adolescent Behavioral Services", 'url' => '/service'],
['text' => "Continuing Care", 'url' => '/service'],
['text' => "Diabetes Education & Prevention", 'url' => '/service'],
['text' => "Emergency Services", 'url' => '/service'],
['text' => "Endocrinology", 'url' => '/service'],
['text' => "Eye Care", 'url' => '/service'],
['text' => "Halifax Health Foundation", 'url' => '/service'],
['text' => "Hand Surgery", 'url' => '/service'],
['text' => "Healthy Living Centers", 'url' => '/service'],
['text' => "Heart and Vascular", 'url' => '/service'],
['text' => "Human Resources", 'url' => '/service'],
['text' => "Hyperbaric Medicine", 'url' => '/service'],
['text' => "Labor & Delivery", 'url' => '/service'],
['text' => "Laboratory", 'url' => '/service'],
['text' => "Lung Care", 'url' => '/service'],
['text' => "Minimally Invasive Cardiac Surgery", 'url' => '/service'],
['text' => "Modified Barium Swallow Test", 'url' => '/service'],
['text' => "Nephrology", 'url' => '/service'],
['text' => "Neurosciences", 'url' => '/service'],
['text' => "OBGYN Hospitalists", 'url' => '/service'],
['text' => "Orthopedics", 'url' => '/service'],
['text' => "Pain Medicine", 'url' => '/service'],
['text' => "Partnerships", 'url' => '/service'],
['text' => "Pediatrics", 'url' => '/service'],
['text' => "Plastic Surgery and Aesthetics", 'url' => '/service'],
['text' => "Primary Care", 'url' => '/service'],
['text' => "Radiology", 'url' => '/service'],
['text' => "Rehabilitation", 'url' => '/service'],
['text' => "Robotics", 'url' => '/service'],
['text' => "Supportive Care", 'url' => '/service'],
['text' => "Surgical Weight Loss", 'url' => '/service'],
['text' => "Transplant Services", 'url' => '/service'],
['text' => "Trauma Surgery", 'url' => '/service'],
['text' => "Urgent Care", 'url' => '/service'],
['text' => "Urology", 'url' => '/service'],
['text' => "Volunteer Opportunities", 'url' => '/service'],
['text' => "Weight Management", 'url' => '/service'],
['text' => "Wellness & Fitness Center", 'url' => '/service'],
['text' => "Wound Care & Hyperbaric Medicine", 'url' => '/service'],
]);
@endphp

<x-section class="bg-primary-50">
    <x-container>
        <x-cols class="justify-between">
            <x-col class="lg:w-1/3">
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
            </x-col>
            <x-col class="lg:w-2/3 xl:w-1/2">
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
            </x-col>
        </x-cols>
    </x-container>
</x-section>