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
                ->with('posts', collect([
                    [
                        'title' => 'Let\'s talk about colon health!',
                        'excerpt' => 'Every March National Colorectal Cancer Awareness Month spotlights this disease and inspires more people to get checked starting at the age of 45.',
                        'url' => '/post',
                        'img' => 'holdinghandsjpg.jpeg',
                    ], [
                        'title' => 'Halifax Health | Brooks Rehabilitation Community Programs',
                        'excerpt' => 'A variety of activities are located throughout Volusia and Flagler counties and are open to everyone in the community.',
                        'url' => '/post',
                        'img' => 'kayak.jpg',
                    ], [
                        'title' => 'Andrea Forster Named First Diabetes Navigator',
                        'excerpt' => 'The Lohman Diabetes Center for Diabetes and Endocrinology at Halifax Health is proud to announce Andrea Forster has joined as a Diabetes Navigator.',
                        'url' => '/post',
                        'img' => 'andrea.jpg',
                    ], [
                        'title' => 'Halifax Health – Hospice to Host 4th Annual Rick Zimmer Jr. Memorial Golf Tournament to Benefit Traumatic Loss Program',
                        'excerpt' => 'Hospice will be hosting the 4th Annual Rick Zimmer Jr. Memorial Golf tournament on Saturday, May 6, at Cypress Head Golf Club in Port Orange.',
                        'url' => '/post',
                        'img' => 'golf.jpg',
                    ]
                ]))
                ->with('services', collect([
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
                ]))
                ->with('locations', collect([
                    [
                        'title' => 'Halifax Health – Medical Center of Daytona Beach',
                        'whisper' => '',
                        'url' => '/locations/show',
                        'img' => 'daytona.jpg',
                        'addr' => '201 N Clyde Morris Blvd. Suite 110 Daytona Beach, FL 32114',
                        'excerpt' => '201 N Clyde Morris Blvd. Suite 110 Daytona Beach, FL 32114',
                    ],
                    [
                        'title' => 'Halifax Health – Medical Center of Port Orange',
                        'whisper' => '',
                        'url' => '/locations/show',
                        'img' => 'portorange.jpg',
                        'addr' => '1185 Dunlawton Ave. Suite 105 Port Orange, FL 32127',
                        'excerpt' => '1185 Dunlawton Ave. Suite 105 Port Orange, FL 32127',
                    ],
                    [
                        'title' => 'Halifax Health | UF Health – Medical Center of Deltona',
                        'whisper' => '',
                        'url' => '/locations/show',
                        'img' => 'deltona.jpg',
                        'addr' => '3400 Halifax Crossings Blvd., Suite 140 Deltona, FL 32725',
                        'excerpt' => '3400 Halifax Crossings Blvd., Suite 140 Deltona, FL 32725',
                    ],
                ]));
        });
    }
}
