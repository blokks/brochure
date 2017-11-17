<section id='showcase' class='showcase' data-view>
    <div class='showcase__content'>
        <header class='showcase__header'>
            <h1 class='showcase__title'>
                @lang('brochure.showcase.title')
            </h1>

            <h2 class='showcase__subtitle'>
                @lang('brochure.showcase.subtitle')
            </h2>
        </header>

        <div class='showcase__slideshow'>
            <img src='{{ url('brochure/dist/images/example-01.png') }}' width='900' height='450' alt='The Next Web Conference' data-client='tnw' class='showcase__slide'>
            <img src='{{ url('brochure/dist/images/example-03.png') }}' width='900' height='450' alt='De Correspondent' data-client='correspondent' class='showcase__slide'>
            <img src='{{ url('brochure/dist/images/example-01.png') }}' width='900' height='450' alt='Brainwash Festival' data-client='brainwash' class='showcase__slide'>
            <img src='{{ url('brochure/dist/images/example-03.png') }}' width='900' height='450' alt='Momentum 2018' data-client='momentum' class='showcase__slide'>
        </div>

        <ul class='showcase__slide-selector'>
            <li>
                <button class='showcase__slide-button' data-client='tnw'><span>The Next Web Conference</span></button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>

            <li>
                <button class='showcase__slide-button showcase__slide-button--selected' data-client='momentum'><span>Momentum 2017</span></button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>

            <li>
                <button class='showcase__slide-button' data-client='correspondent'><span>De Correspondent</span></button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>

            <li>
                <button class='showcase__slide-button' data-client='brainwash'><span>Brainwash Festival</span></button>
                <a href='#' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>
        </ul>
    </div>
</section>

@push('styles')
    <style>
        /* The Next Web */
        .showcase__slide-button--selected[data-client='tnw'] {
            background-image: url('{{ url('brochure/dist/images/showcase__tnw--background.png') }}');
            background-size: cover;
        }

        .showcase__slide-button[data-client='tnw'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__tnw--logo.png') }}');
            width: 114px; height: 54px;
        }

        /* Momentum */
        .showcase__slide-button--selected[data-client='momentum'] {
            background-image: url('{{ url('brochure/dist/images/showcase__momentum--background.png') }}');
            background-size: cover;
        }

        .showcase__slide-button[data-client='momentum'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__momentum--logo.png') }}');
            width: 114px; height: 61px;
        }

        /* Brainwash */
        .showcase__slide-button--selected[data-client='brainwash'] {
            background-image: url('{{ url('brochure/dist/images/showcase__brainwash--background.png') }}');
            background-size: cover;
        }

        .showcase__slide-button[data-client='brainwash'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__brainwash--logo.png') }}');
            width: 135px; height: 37px;
        }

        /* Correspondent */
        .showcase__slide-button--selected[data-client='correspondent'] {
            background-image: url('{{ url('brochure/dist/images/showcase__correspondent--background.png') }}');
            background-size: cover;
        }

        .showcase__slide-button[data-client='correspondent'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__correspondent--logo.png') }}');
            width: 140px; height: 34px;
        }
    </style>
@endpush
