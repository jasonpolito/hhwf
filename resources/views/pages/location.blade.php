@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes - Single Location'
]
@endphp

@extends('layouts.default')

@section('content')

@include('pages.location.partials.masthead')
@include('pages.location.partials.details')
@include('partials.services')

{{-- <x-section>
    <x-container>
        <x-cols>
            <x-col class="w-1/4">
            </x-col>
            <x-col class="md:w-2/3 xl:w-1/2">
                <x-text>
                    <h3>Emergency Department of Daytona Beach</h3>
                    <p>Halifax Health offers the most comprehensive Emergency Medicine services in our community. If you
                        are experiencing a life-threatening emergency, CALL 911.</p>
                    <h3>Emergency Care</h3>
                    <p>Halifax Health is an Acute Care Facility for Florida’s Brain and Spinal Cord Injury Program and
                        operates the area’s ONLY Level II Trauma Center. We have collaborated with University of Florida
                        Health (UF Health) to bring advanced trauma surgery to Volusia , Flagler and Brevard County.</p>
                    <p>Our Pediatric Emergency Department offers the area’s ONLY Acute Care Pediatric Unit staffed 24
                        hours a day with pediatric specialists. Our comprehensive pediatric emergency program provides
                        specialized emergency care with a seamless transition of care to pediatric acute care.</p>
                    <h3>Level II Trauma Center</h3>
                    <p>As the area’s ONLY Level II Trauma Center, we are required to have a trauma care team available
                        24 hours a day, 7 days a week, 365 days a year.</p>
                    <p>Halifax Health has colloborated with UF Health to bring the most elite trauma surgeons to our
                        community. UF Health Trauma Surgery at Halifax Health prioritizes patient care by employing the
                        most experienced, passionate professionals in the field.</p>
                </x-text>
            </x-col>
        </x-cols>
    </x-container>
</x-section> --}}

@endsection