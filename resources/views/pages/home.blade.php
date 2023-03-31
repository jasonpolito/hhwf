@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes'
]
@endphp

@extends('layouts.default')

@section('content')
@include('pages.home.partials.masthead')
@include('pages.home.partials.locations')
@include('pages.home.partials.careers')
@include('pages.home.partials.services')
@include('pages.home.partials.philosophy')
@include('pages.home.partials.blog')

@endsection