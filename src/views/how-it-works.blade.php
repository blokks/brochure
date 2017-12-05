<section class='how-it-works' data-view='how-it-works' data-path='/how-it-works'>
    <header class='how-it-works__header'>
        <h1 class='how-it-works__title'>
            @lang('brochure.how_it_works.title')
        </h1>

        <svg>
            <use xlink:href='{{ url('/brochure/dist/images/spritesheet.svg#arrow-down') }}'></use>
        </svg>        
    </header>

    <section class='how-it-works__feature feature feature--manage' data-view='feature' data-path='/how-it-works'>
        <div class='feature__content'>
            <div class='feature__info'>
                <h1 class='feature__title'>
                    @lang('brochure.how_it_works.manage.title')
                </h1>

                <h2 class='feature__subtitle'>
                    @lang('brochure.how_it_works.manage.subtitle')
                </h2>

                <p class='feature__description'>
                    @lang('brochure.how_it_works.manage.description')
                </p>

                <ol class='feature__features'>
                    <li>@lang('brochure.how_it_works.manage.features.multiple_days')</li>
                    <li>@lang('brochure.how_it_works.manage.features.export_data')</li>
                    <li>@lang('brochure.how_it_works.manage.features.team_members')/li>
                </ol>
            </div>

            <div class='feature__media'>
                <div class='feature__video-wrapper'>
                    <video id='addYourLineupVideo' src='{{ url('/brochure/dist/videos/blokks-feature-A.mp4') }}' reload='none' loop muted playsinline class='feature__player'></video>
                </div>
            </div>
        </div>
    </section>

    <section class='how-it-works__feature feature feature--embed' data-view='feature' data-path='/how-it-works'>
        <div class='feature__content'>
            <div class='feature__info'>
                <h1 class='feature__title'>
                    @lang('brochure.how_it_works.embed.title')
                </h1>

                <h2 class='feature__subtitle'>
                    @lang('brochure.how_it_works.embed.subtitle')
                </h2>

                <p class='feature__description'>
                    @lang('brochure.how_it_works.embed.description')
                </p>

                <ol class='feature__features'>
                    <li>@lang('brochure.how_it_works.embed.features.mobile_first')</li>
                    <li>@lang('brochure.how_it_works.embed.features.customizable')</li>
                    <li>@lang('brochure.how_it_works.embed.features.favorites')</li>
                </ol>
            </div>

            <div class='feature__media'>
                <div class='feature__video-wrapper'>
                    <video id='embedYourTimetableVideo' src='{{ url('/brochure/dist/videos/brochure-embed-your-timetable.mp4') }}' reload='none' loop muted playsinline class='feature__player'></video>
                </div>
            </div>
        </div>
    </section>

    <section class='how-it-works__feature feature feature--developers' data-view='feature' data-path='/how-it-works'>
        <div class='feature__content'>
            <div class='feature__info'>
                <h1 class='feature__title'>
                    @lang('brochure.how_it_works.developers.title')
                </h1>

                <h2 class='feature__subtitle'>
                    @lang('brochure.how_it_works.developers.subtitle')
                </h2>

                <p class='feature__description'>
                    @lang('brochure.how_it_works.developers.description')
                </p>

                <ol class='feature__features'>
                    <li>@lang('brochure.how_it_works.developers.features.layouts')</li>
                    <li>@lang('brochure.how_it_works.developers.features.customizable')</li>
                    <li>@lang('brochure.how_it_works.developers.features.api')</li>
                    <li>@lang('brochure.how_it_works.developers.features.documentation')</li>
                </ol>
            </div>

            <div class='feature__media'>
                <div class='feature__video-wrapper'>
                    <video id='builtForDevelopersVideo' reload='none' loop muted playsinline class='feature__player'></video>
                </div>
            </div>
        </div>
    </section>
</section>