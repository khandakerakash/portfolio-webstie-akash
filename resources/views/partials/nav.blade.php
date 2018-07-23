<div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
    <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
    </label>

    <div class="navigation__background">&nbsp;</div>

    <nav class="navigation__nav">
        <ul class="navigation__list text-center">
            <li class="lavigation__item"><a href="{{ URL::to('profile') }}" class="navigation__link"><span><i class="fa fa-user" aria-hidden="true"></i></span> Profile</a></li>
            <li class="lavigation__item"><a href="{{ URL::to('portfolio') }}" class="navigation__link"><span><i class="fa fa-briefcase" aria-hidden="true"></i></span> Portfolio</a></li>
            <li class="lavigation__item"><a href="{{ URL::to('resume') }}" class="navigation__link"><span><i class="fa fa-file-text-o" aria-hidden="true"></i></span> Resume</a></li>
            <li class="lavigation__item"><a href="{{ URL::to('contact') }}" class="navigation__link"><span><i class="fa fa-paper-plane-o" aria-hidden="true"></i></span> Contact</a></li>
        </ul>
    </nav>
</div><!-- /.navigation -->
