<section class='showcase'>
    <div>
        <header class='showcase__header'>
            <h1 class='showcase__title'>Built with Blokks</h1>
            <h2 class='showcase__subtitle'>Examples from our clients</h2>
        </header>

        <div class='showcase__slideshow'>
            <img src='{{ url('brochure/dist/images/example-01.png') }}' width='900' height='450' alt='The Next Web Conference' class='showcase__slide'>
            <img src='{{ url('brochure/dist/images/example-03.png') }}' width='900' height='450' alt='Into The Woods Festival' class='showcase__slide'>
            <img src='{{ url('brochure/dist/images/example-01.png') }}' width='900' height='450' alt='Brainwash Festival' class='showcase__slide'>
            <img src='{{ url('brochure/dist/images/example-03.png') }}' width='900' height='450' alt='Momentum 2018' class='showcase__slide'>
        </div>

        <ul class='showcase__slide-selector'>
            <li>
                <button class='showcase__slide-button showcase__slide-button--selected' style='background-image: url({{ url('brochure/dist/images/example-01-logo.png') }})'>The Next Web Conference</button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>Visit website</a>
            </li>

            <li>
                <button class='showcase__slide-button' style='background-image: url({{ url('brochure/dist/images/example-02-logo.png') }})'>Into The Woods Festival</button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>Visit website</a>
            </li>

            <li>
                <button class='showcase__slide-button' style='background-image: url({{ url('brochure/dist/images/example-03-logo.png') }})'>Brainwash Festival</button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>Visit website</a>
            </li>

            <li>
                <button class='showcase__slide-button' style='background-image: url({{ url('brochure/dist/images/example-04-logo.png') }})'>Momentum 2018</button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>Visit website</a>
            </li>
        </ul>
    </div>
</section>