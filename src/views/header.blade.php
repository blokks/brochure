<header id='header' class='header' data-view>
    <div class='header__content'>
        <svg class='header__logo' viewBox='0 0 360 60'>
            <use xlink:href='{{ url('/brochure/dist/images/spritesheet.svg#colored-logo') }}'></use>
        </svg>

        <h1 class='header__title'>
            @lang('brochure.header.title')
        </h1>

        <h2 class='header__subtitle'>
            @lang('brochure.header.subtitle')
        </h2>

        <a href='/how-it-works' class='header__continue-link' data-link>
            @lang('brochure.header.how_it_works')
        </a>
    </div>

    <div class='header__animation'>
        <svg viewBox='0 0 100 100' preserveAspectRatio='none'><path d='M0,0 100,0 100,100 0,100z'></path></svg>
        <svg viewBox='0 0 100 100' preserveAspectRatio='none'><path d='M0,0 100,0 100,100 0,100z'></path></svg>
        <svg viewBox='0 0 100 100' preserveAspectRatio='none'><path d='M0,0 100,0 100,100 0,100z'></path></svg>
        <svg viewBox='0 0 100 100' preserveAspectRatio='none'><path d='M0,0 100,0 100,100 0,100z'></path></svg>
        <svg viewBox='0 0 100 100' preserveAspectRatio='none'><path d='M0,0 100,0 100,100 0,100z'></path></svg>
    </div>
</header>