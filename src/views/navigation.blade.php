<nav id='navigation' class='navigation'>
    <a href='/' data-link>
        <svg class='navigation__logo'>
            <use xlink:href='{{ url('/brochure/dist/images/spritesheet.svg#logo') }}'></use>
        </svg>
    </a>

    <ol class='navigation__links'>
        <li><a href='/how-it-works/' class='navigation__link' data-link>@lang('brochure.navigation.how_it_works')</a></li>
        <li><a href='/showcase/' class='navigation__link' data-link>@lang('brochure.navigation.showcase')</a></li>
        <li><a href='/pricing/' class='navigation__link' data-link>@lang('brochure.navigation.pricing')</a></li>
        <li><a href='/contact/' class='navigation__link' data-link>@lang('brochure.navigation.contact')</a></li>
    </ol>

    <div class='navigation__account'>
        <a href='{{ route("login") }}' rel='noopener' class='navigation__link navigation__link--signin'>@lang('brochure.navigation.signin')</a>
        {{-- <a href='{{ route("signup") }}' rel='noopener' class='navigation__link navigation__link--try'>@lang('brochure.navigation.signup')</a> --}}
    </div>
</nav>
