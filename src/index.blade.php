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

@section('scripts')
	@if(isset($notification))
		<script>
			var startTime = new Date().getTime();
			
			var notification = document.getElementById('notification');
			window.scroll(0, notification.clientHeight);
		</script>

        <script>
            (function(i,s,o,g,r,a,m){
                i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })
            (window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-64372736-5', 'auto');
            ga('send', 'pageview');
        </script>  		
	@endif
@stop