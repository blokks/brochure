@extends('brochure::layout')

@section('title', trans('brochure.title'))
@section('content')

	@if(isset($notification))
	    @include('brochure::views/notification')
	@endif

    @include('brochure::views/navigation')
    @include('brochure::views/header')
    @include('brochure::views/how-it-works')

	@include('brochure::views/poster', [
		'link' => 'http://esns.nl/',
		'credits' => 'ESNS - Eurosonic Noorderslag',
		'preview' => '/brochure/dist/images/poster__esns@160.jpg',
		'images' => [
			'/brochure/dist/images/poster__esns@960.jpg',
			'/brochure/dist/images/poster__esns@1920.jpg',
			'/brochure/dist/images/poster__esns@2880.jpg'
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

@section('scripts')
	<script>
		var startTime = new Date().getTime();
	</script>

	@if(isset($notification))
		<script>
			var notification = document.getElementById('notification');
			window.scroll(0, notification.clientHeight);
		</script>
	@endif
@stop
