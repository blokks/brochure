<nav id='navigation' class='navigation'>
    <a href='/' data-link>
        <svg class='navigation__logo'>
            <use xlink:href='{{ url('/brochure/dist/images/spritesheet.svg#logo') }}'></use>
        </svg>
    </a>

    <ol class='navigation__links'>
        <li><a href='/how-it-works' class='navigation__link' data-link>How it works</a></li>
        <li><a href='/showcase' class='navigation__link' data-link>Showcase</a></li>
        <li><a href='/pricing' class='navigation__link' data-link>Pricing</a></li>
        <li><a href='/contact' class='navigation__link' data-link>Contact</a></li>
    </ol>

    <div class='navigation__account'>
        <a href='{{ route("login") }}' class='navigation__link navigation__link--signin'>Sign in</a>
        <a href='{{ route("signup") }}' class='navigation__link navigation__link--try'>Try Blokks</a>
    </div>
</nav>