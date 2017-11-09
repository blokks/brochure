@extends('brochure::layout')

@section('title', trans('brochure.title'))
@section('content')

    @include('brochure::views/navigation')
    @include('brochure::views/header')
    @include('brochure::views/how-it-works')
    @include('brochure::views/pricing')
    @include('brochure::views/contact')
    @include('brochure::views/footer')

@stop
