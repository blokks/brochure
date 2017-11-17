<section id='how-it-works' class='how-it-works how-it-works--manage' data-view>
    <div class='how-it-works__content'>
        <div class='how-it-works__info'>
            <h1 class='how-it-works__title'>
                @lang('brochure.how_it_works.manage.title')
            </h1>

            <h2 class='how-it-works__subtitle'>
                @lang('brochure.how_it_works.manage.subtitle')
            </h2>

            <p class='how-it-works__description'>
                @lang('brochure.how_it_works.manage.description')
            </p>

            <ol class='how-it-works__features'>
                <li>@lang('brochure.how_it_works.manage.features.multiple_days')</li>
                <li>@lang('brochure.how_it_works.manage.features.export_data')</li>
                <li>@lang('brochure.how_it_works.manage.features.team_members')/li>
            </ol>
        </div>

        <div class='how-it-works__media'>
            <div class='how-it-works__video-wrapper'>
                <video id='addYourLineupVideo' src='{{ url('/brochure/dist/videos/brochure-add-your-lineup.mp4') }}' reload='none' loop muted playsinline class='how-it-works__player'></video>
            </div>
        </div>
    </div>
</section>

<section id='how-it-works' class='how-it-works how-it-works--embed' data-view>
    <div class='how-it-works__content'>
        <div class='how-it-works__info'>
            <h1 class='how-it-works__title'>
                @lang('brochure.how_it_works.embed.title')
            </h1>

            <h2 class='how-it-works__subtitle'>
                @lang('brochure.how_it_works.embed.subtitle')
            </h2>

            <p class='how-it-works__description'>
                @lang('brochure.how_it_works.embed.description')
            </p>

            <ol class='how-it-works__features'>
                <li>@lang('brochure.how_it_works.embed.features.mobile_first')</li>
                <li>@lang('brochure.how_it_works.embed.features.customizable')</li>
                <li>@lang('brochure.how_it_works.embed.features.favorites')</li>
            </ol>
        </div>

        <div class='how-it-works__media'>
            <div class='how-it-works__video-wrapper'>
                <video id='embedYourTimetableVideo' src='{{ url('/brochure/dist/videos/brochure-embed-your-timetable.mp4') }}' reload='none' loop muted playsinline class='how-it-works__player'></video>
            </div>
        </div>
    </div>
</section>

<section id='how-it-works' class='how-it-works how-it-works--developers' data-view>
    <div class='how-it-works__content'>
        <div class='how-it-works__info'>
            <h1 class='how-it-works__title'>
                @lang('brochure.how_it_works.developers.title')
            </h1>

            <h2 class='how-it-works__subtitle'>
                @lang('brochure.how_it_works.developers.subtitle')
            </h2>

            <p class='how-it-works__description'>
                @lang('brochure.how_it_works.developers.description')
            </p>

            <ol class='how-it-works__features'>
                <li>@lang('brochure.how_it_works.developers.features.layouts')</li>
                <li>@lang('brochure.how_it_works.developers.features.customizable')</li>
                <li>@lang('brochure.how_it_works.developers.features.api')</li>
                <li>@lang('brochure.how_it_works.developers.features.documentation')</li>
            </ol>
        </div>

        <div class='how-it-works__media'>
            <div class='how-it-works__video-wrapper'>
                <video id='builtForDevelopersVideo' reload='none' loop muted playsinline class='how-it-works__player'></video>
            </div>
        </div>
    </div>
</section>