@extends('brochure::layout')

@section('title', trans('brochure.title'))
@section('content')

    @include('brochure::views/navigation')
    @include('brochure::views/header')
    @include('brochure::views/how-it-works')

	@include('brochure::views/poster', [
		'link' => 'http://janusvandeneijnden.nl/',
		'credits' => 'TNW Conference — Photo by Janus van den Eijnden',
		'preview' => '/brochure/dist/images/poster__tnw@160.jpg',
		'images' => [
			'/brochure/dist/images/poster__tnw@960.jpg',
			'/brochure/dist/images/poster__tnw@1920.jpg',
			'/brochure/dist/images/poster__tnw@2880.jpg'
		]
	])

    @include('brochure::views/showcase')
    @include('brochure::views/pricing')

	@include('brochure::views/poster', [
		'link' => 'http://www.audriuskriauciunas.com/',
		'credits' => 'The Correspondent Festival — Photo by Audrius Kriaučiūnas',
		'preview' => '/brochure/dist/images/poster__corres@160.jpg',
		'images' => [
			'/brochure/dist/images/poster__corres@960.jpg',
			'/brochure/dist/images/poster__corres@1920.jpg',
			'/brochure/dist/images/poster__corres@2880.jpg'
		]
	])

    @include('brochure::views/call-to-action')
    @include('brochure::views/footer')

@stop
