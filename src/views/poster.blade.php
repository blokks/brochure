<section class='poster'>
	<div class='poster__content'>
		<a href='{{ $link }}' target='_blank' class='poster__link'>
			<span>
				{{ $title }}
			</span>

	        <svg>
	            <use xlink:href='{{ url('/brochure/dist/images/spritesheet.svg#arrow-right') }}'></use>
	        </svg>        			
		</a>
	</div>

	<img src='{{ url($preview) }}' class='poster__image lazyload'
	    data-sizes='auto' 
		data-srcset='{{ url($images[0]) }} 480w, {{ url($images[1]) }} 960w, {{ url($images[2]) }} 1440w'/>

	<noscript>
	    <img src='{{ url($images[1]) }}' class='poster__image' />
	</noscript>			
</section>