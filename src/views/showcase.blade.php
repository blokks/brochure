<section class='showcase' data-view='showcase' data-path='/showcase/'>
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
            <img width='900' height='450' alt='Eurosonic Noorderslag' data-client='esns' class='showcase__slide showcase__slide--selected lazyload'
                data-sizes='auto' 
                data-srcset='
                    {{ url('brochure/dist/images/showcase__esns--visual@400.jpg') }} 400w, 
                    {{ url('brochure/dist/images/showcase__esns--visual@800.jpg') }} 800w, 
                    {{ url('brochure/dist/images/showcase__esns--visual@1100.jpg') }} 1100w'/>

            <img width='900' height='450' alt='The Next Web Conference' data-client='tnw' class='showcase__slide lazyload'
                data-sizes='auto' 
                data-srcset='
                    {{ url('brochure/dist/images/showcase__tnw--visual@400.jpg') }} 400w, 
                    {{ url('brochure/dist/images/showcase__tnw--visual@800.jpg') }} 800w, 
                    {{ url('brochure/dist/images/showcase__tnw--visual@1100.jpg') }} 1100w'/>

            <img width='900' height='450' alt='De Correspondent' data-client='correspondent' class='showcase__slide lazyload'
                data-sizes='auto' 
                data-srcset='
                    {{ url('brochure/dist/images/showcase__correspondent--visual@400.jpg') }} 400w, 
                    {{ url('brochure/dist/images/showcase__correspondent--visual@800.jpg') }} 800w, 
                    {{ url('brochure/dist/images/showcase__correspondent--visual@1100.jpg') }} 1100w'/>

            <img width='900' height='450' alt='Brainwash' data-client='brainwash' class='showcase__slide lazyload'
                data-sizes='auto' 
                data-srcset='
                    {{ url('brochure/dist/images/showcase__brainwash--visual@400.jpg') }} 400w, 
                    {{ url('brochure/dist/images/showcase__brainwash--visual@800.jpg') }} 800w, 
                    {{ url('brochure/dist/images/showcase__brainwash--visual@1100.jpg') }} 1100w'/>

            <img width='900' height='450' alt='Momentum' data-client='momentum' class='showcase__slide lazyload'
                data-sizes='auto' 
                data-srcset='
                    {{ url('brochure/dist/images/showcase__momentum--visual@400.jpg') }} 400w, 
                    {{ url('brochure/dist/images/showcase__momentum--visual@800.jpg') }} 800w, 
                    {{ url('brochure/dist/images/showcase__momentum--visual@1100.jpg') }} 1100w'/>

            <noscript>
                <img src='{{ url('brochure/dist/images/showcase__esns--visual@1100.jpg') }}' width='900' height='450' alt='Eurosonic Noorderslag' data-client='esns' class='showcase__slide showcase__slide--selected lazyloaded'>
            </noscript> 
        </div>

        <ul class='showcase__slide-selector'>
            <li>
                <button class='showcase__slide-button showcase__slide-button--selected' data-client='esns'><span>Eurosonic Noorderslag</span></button>
                <a href='https://esns.nl/timetable/eurosonic/' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>

            <li>
                <button class='showcase__slide-button' data-client='tnw'><span>The Next Web Conference</span></button>
                <a href='{{ @route('embeds.dedicated', ['schedule' => 'tnw2017']) }}' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>

            <li>
                <button class='showcase__slide-button' data-client='correspondent'><span>De Correspondent</span></button>
                <a href='https://decorrespondent.nl/evenementen/7/festival-der-vooruitgang/programma' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>

            <li>
                <button class='showcase__slide-button' data-client='brainwash'><span>Brainwash Festival</span></button>
                <a href='{{ @route('embeds.dedicated', ['schedule' => 'brainwash-festival-2019']) }}' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>

            <li>
                <button class='showcase__slide-button' data-client='momentum'><span>Momentum</span></button>
                <a href='{{ @route('embeds.dedicated', ['schedule' => 'new-york-2017']) }}' target='blokks-showcase' class='showcase__website-link'>
                    @lang('brochure.showcase.visit_label')
                </a>
            </li>
        </ul>
    </div>
</section>

@push('styles')
    <style>
        /* ESNS */
        @media (min-width: 30em) {
            .showcase__slide-button--selected[data-client='esns'] {
                background-image: url('{{ url('brochure/dist/images/showcase__esns--background.jpg') }}');
                background-size: cover;
            }
        }

        .showcase__slide-button[data-client='esns'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__esns--logo.png') }}');
            width: 129px; height: 29px;
        }

        /* The Next Web */
        @media (min-width: 30em) {
            .showcase__slide-button--selected[data-client='tnw'] {
                background-image: url('{{ url('brochure/dist/images/showcase__tnw--background.jpg') }}');
                background-size: cover;
            }
        }

        .showcase__slide-button[data-client='tnw'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__tnw--logo.png') }}');
            width: 114px; height: 54px;
        }

        /* Brainwash */
        @media (min-width: 30em) {
            .showcase__slide-button--selected[data-client='brainwash'] {
                background-image: url('{{ url('brochure/dist/images/showcase__brainwash--background.jpg') }}');
                background-size: cover;
            }
        }

        .showcase__slide-button[data-client='brainwash'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__brainwash--logo.png') }}');
            width: 129px; height: 37px;
        }

        /* Correspondent */
        @media (min-width: 30em) {
            .showcase__slide-button--selected[data-client='correspondent'] {
                background-image: url('{{ url('brochure/dist/images/showcase__correspondent--background.png') }}');
                background-size: cover;
            }
        }

        .showcase__slide-button[data-client='correspondent'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__correspondent--logo.png') }}');
            width: 140px; height: 34px;
        }

        /* Momentum */
        @media (min-width: 30em) {
            .showcase__slide-button--selected[data-client='momentum'] {
                background-image: url('{{ url('brochure/dist/images/showcase__momentum--background.jpg') }}');
                background-size: cover;
            }
        }

        .showcase__slide-button[data-client='momentum'] span {
            background-image: url('{{ url('brochure/dist/images/showcase__momentum--logo.png') }}');
            width: 114px; height: 61px;
        }
    </style>
@endpush
