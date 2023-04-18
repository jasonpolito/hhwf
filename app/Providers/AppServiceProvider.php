<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $view->with('gap', 8)
                ->with('tags', collect([
                    ['text' => 'News', 'url' => '#'],
                    ['text' => 'Article', 'url' => '#'],
                    ['text' => 'Blog', 'url' => '#'],
                    ['text' => 'Event', 'url' => '#'],
                    ['text' => 'Podcast', 'url' => '#'],
                    ['text' => 'Press Release', 'url' => '#'],
                    ['text' => 'Uncategorized', 'url' => '#'],
                    ['text' => 'Video', 'url' => '#'],
                ]));
        });

        view()->composer(['pages.*', 'partials.*'], function ($view) {
            $view->with('cities', collect([
                ['text' => 'Daytona Beach'],
                ['text' => 'New Symrna'],
                ['text' => 'Palm Coast'],
                ['text' => 'Port Orange'],
                ['text' => 'Ormond Beach'],
                ['text' => 'Deltona'],
            ]))
                ->with('doctors', collect(config('halifax.doctors')))
                ->with('posts', collect([
                    [
                        'title' => 'Let\'s talk about colon health!',
                        'excerpt' => 'Every March National Colorectal Cancer Awareness Month spotlights this disease and inspires more people to get checked starting at the age of 45.',
                        'url' => route('pages.blog.show'),
                        'img' => 'holdinghandsjpg.jpeg',
                    ], [
                        'title' => 'Halifax Health | Brooks Rehabilitation Community Programs',
                        'excerpt' => 'A variety of activities are located throughout Volusia and Flagler counties and are open to everyone in the community.',
                        'url' => route('pages.blog.show'),
                        'img' => 'kayak.jpg',
                    ], [
                        'title' => 'Andrea Forster Named First Diabetes Navigator',
                        'excerpt' => 'The Lohman Diabetes Center for Diabetes and Endocrinology at Halifax Health is proud to announce Andrea Forster has joined as a Diabetes Navigator.',
                        'url' => route('pages.blog.show'),
                        'img' => 'andrea.jpg',
                    ], [
                        'title' => 'Halifax Health – Hospice to Host 4th Annual Rick Zimmer Jr. Memorial Golf Tournament to Benefit Traumatic Loss Program',
                        'excerpt' => 'Hospice will be hosting the 4th Annual Rick Zimmer Jr. Memorial Golf tournament on Saturday, May 6, at Cypress Head Golf Club in Port Orange.',
                        'url' => route('pages.blog.show'),
                        'img' => 'golf.jpg',
                    ]
                ]))
                ->with('services', collect([
                    ['text' => "Adult Behavioral Services", 'url' => route('pages.services.show')],
                    ['text' => "Amputee Clinic", 'url' => route('pages.services.show')],
                    ['text' => "Cancer Care", 'url' => route('pages.services.show')],
                    ['text' => "Cardiac and Pulmonary Rehabilitation", 'url' => route('pages.services.show')],
                    ['text' => "Cardiology", 'url' => route('pages.services.show')],
                    ['text' => "Care For Women", 'url' => route('pages.services.show')],
                    ['text' => "Child & Adolescent Behavioral Services", 'url' => route('pages.services.show')],
                    ['text' => "Continuing Care", 'url' => route('pages.services.show')],
                    ['text' => "Diabetes Education & Prevention", 'url' => route('pages.services.show')],
                    ['text' => "Emergency Services", 'url' => route('pages.services.show')],
                    ['text' => "Endocrinology", 'url' => route('pages.services.show')],
                    ['text' => "Eye Care", 'url' => route('pages.services.show')],
                    ['text' => "Halifax Health Foundation", 'url' => route('pages.services.show')],
                    ['text' => "Hand Surgery", 'url' => route('pages.services.show')],
                    ['text' => "Healthy Living Centers", 'url' => route('pages.services.show')],
                    ['text' => "Heart and Vascular", 'url' => route('pages.services.show')],
                    ['text' => "Human Resources", 'url' => route('pages.services.show')],
                    ['text' => "Hyperbaric Medicine", 'url' => route('pages.services.show')],
                    ['text' => "Labor & Delivery", 'url' => route('pages.services.show')],
                    ['text' => "Laboratory", 'url' => route('pages.services.show')],
                    ['text' => "Lung Care", 'url' => route('pages.services.show')],
                    ['text' => "Minimally Invasive Cardiac Surgery", 'url' => route('pages.services.show')],
                    ['text' => "Modified Barium Swallow Test", 'url' => route('pages.services.show')],
                    ['text' => "Nephrology", 'url' => route('pages.services.show')],
                    ['text' => "Neurosciences", 'url' => route('pages.services.show')],
                    ['text' => "OBGYN Hospitalists", 'url' => route('pages.services.show')],
                    ['text' => "Orthopedics", 'url' => route('pages.services.show')],
                    ['text' => "Pain Medicine", 'url' => route('pages.services.show')],
                    ['text' => "Partnerships", 'url' => route('pages.services.show')],
                    ['text' => "Pediatrics", 'url' => route('pages.services.show')],
                    ['text' => "Plastic Surgery and Aesthetics", 'url' => route('pages.services.show')],
                    ['text' => "Primary Care", 'url' => route('pages.services.show')],
                    ['text' => "Radiology", 'url' => route('pages.services.show')],
                    ['text' => "Rehabilitation", 'url' => route('pages.services.show')],
                    ['text' => "Robotics", 'url' => route('pages.services.show')],
                    ['text' => "Supportive Care", 'url' => route('pages.services.show')],
                    ['text' => "Surgical Weight Loss", 'url' => route('pages.services.show')],
                    ['text' => "Transplant Services", 'url' => route('pages.services.show')],
                    ['text' => "Trauma Surgery", 'url' => route('pages.services.show')],
                    ['text' => "Urgent Care", 'url' => route('pages.services.show')],
                    ['text' => "Urology", 'url' => route('pages.services.show')],
                    ['text' => "Volunteer Opportunities", 'url' => route('pages.services.show')],
                    ['text' => "Weight Management", 'url' => route('pages.services.show')],
                    ['text' => "Wellness & Fitness Center", 'url' => route('pages.services.show')],
                    ['text' => "Wound Care & Hyperbaric Medicine", 'url' => route('pages.services.show')],
                ]))
                ->with('locations', collect([
                    [
                        'title' => 'Halifax Health – Medical Center of Daytona Beach',
                        'whisper' => '',
                        'url' => '/locations/show',
                        'img' => 'daytona.jpg',
                        'addr' => '201 N Clyde Morris Blvd Suite 110<br>Daytona Beach, FL 32114',
                        'excerpt' => 'Halifax Health Medical Center of Daytona Beach is a 563-bed hospital. All major
                        medical and surgical services are available.
                        The 24-hours emergency department (ED) includes the area’s only Level II Trauma
                        Center.',
                    ],
                    [
                        'title' => 'Halifax Health – Medical Center of Port Orange',
                        'whisper' => '',
                        'url' => '/locations/show',
                        'img' => 'portorange.jpg',
                        'addr' => '1185 Dunlawton Ave Suite 105<br>Port Orange, FL 32127',
                        'excerpt' => 'Voted the area’s most preferred emergency department, Halifax Health – Medical Center of Port Orange is open 24 hours a day, seven days a week, providing a seamless care transition with access to over 500 physicians and 56 specialties to meet all of your healthcare needs.',
                    ],
                    [
                        'title' => 'Halifax Health | UF Health – Medical Center of Deltona',
                        'whisper' => '',
                        'url' => '/locations/show',
                        'img' => 'deltona.jpg',
                        'addr' => '3400 Halifax Crossings Blvd Suite 140<br>Deltona, FL 32725',
                        'excerpt' => 'Long recognized for innovation and excellence, Halifax Health is one of the nation’s leading healthcare centers. Halifax Health includes the largest and most comprehensive medical center on Central Florida’s East Coast and is recognized nationally by National Research Corporation for its programs, outcomes and consumer satisfaction.',
                    ],
                ]));
        });
    }
}
