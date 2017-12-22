<section class='poster'>
	<img class='poster__image lazyload'
	    data-sizes='auto' 
		data-srcset='{{ blokks_url($images[0]) }} 480w, {{ blokks_url($images[1]) }} 960w, {{ blokks_url($images[2]) }} 1440w'/>

	<noscript>
	    <img src='{{ blokks_url($images[1]) }}' class='poster__image' />
	</noscript>			

	<a href='{{ $link }}' target='credits' class='poster__credits'>{{ $credits }}</a>
</section>