@php
$page = (object) [
'meta_title' => 'Halifax Health Wireframes - Single Service'
]
@endphp

@extends('layouts.default')

@section('content')

@include('pages.service.partials.masthead')
@include('partials.services')

@endsection