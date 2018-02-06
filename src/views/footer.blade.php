<footer class='footer'>
    <a href='/' class='footer__link footer__link--home' data-link>
        <i>B</i><i>l</i><i>o</i><i>k</i><i>k</i><i>s</i>
    </a>
    
    <ol class='footer__links'>
        <li><a href='mailto:hq@blokks.co' class='footer__link'>@lang('brochure.footer.email')</a></li>
        <li><a href='https://twitter.com/blokkshq' target='_blank' class='footer__link'>@lang('brochure.footer.twitter')</a></li>
        <li><a href='https://blokks.co/docs' target='docs' class='footer__link footer__link--docs'>@lang('brochure.footer.documentation')</a></li>
    </ol>

    <div class='footer__legal'>
        <a href='{{ route('terms') }}' target='legal' class='footer__link footer__link--terms'>@lang('brochure.footer.terms')</a>
        <a href='{{ route('privacy') }}' target='legal' class='footer__link footer__link--privacy'>@lang('brochure.footer.privacy')</a>
        <a href='https://blokks.pr.co/163673-blokks-helps-festivals-and-conferences-create-customise-and-manage-their-event-schedules' target='_blank' class='footer__link footer__link--privacy'>@lang('brochure.footer.press')</a>
        <span class='footer__copyright'>@lang('brochure.footer.copyright', ['year' => date('Y')])</span>
    </div>
</footer>