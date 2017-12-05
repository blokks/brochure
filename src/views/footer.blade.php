<footer class='footer'>
    <ol class='footer__links'>
        <li><a href='/' class='footer__link footer__link--home'><i>B</i><i>l</i><i>o</i><i>k</i><i>k</i><i>s</i></a></li>
        <li><a href='/' target='docs' class='footer__link footer__link--docs'>@lang('brochure.footer.documentation')</a></li>
        <li><a href='/' class='footer__link'>@lang('brochure.footer.email')</a></li>
        <li><a href='/' target='_blank' class='footer__link'>@lang('brochure.footer.twitter')</a></li>
    </ol>

    <div class='footer__legal'>
        <a href='/' class='footer__link footer__link--terms'>@lang('brochure.footer.terms')</a>
        <span class='footer__copyright'>@lang('brochure.footer.copyright', ['year' => date('Y')])</span>
    </div>
</footer>