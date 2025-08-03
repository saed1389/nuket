<div>
    <footer class="main-footer">
        <div class="circle-layer"></div>
        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/background/pattern-12.png') }})"></div>
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/background/pattern-13.png') }})"></div>
        <div class="pattern-layer-three" style="background-image: url({{ asset('assets/images/background/pattern-14.png') }})"></div>
        <div class="pattern-layer-four" style="background-image: url({{ asset('assets/images/background/pattern-13.png') }})"></div>
        <div class="auto-container">
            <div class="widgets-section">
                <div class="row clearfix">
                    <div class="footer-column col-lg-5 col-md-12 col-sm-12">
                        <div class="footer-widget logo-widget">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="" /></a>
                            </div>
                            <ul class="info-list">
                                <li><span class="icon fa fa-phone"></span> <strong>Gulnaz Umsu:</strong> <br> <a href="tel:+358415775345">+358 415 775 345</a></li>
                                <li><span class="icon fa fa-phone"></span> <strong>Nuket Aygen Eren:</strong> <br> <a href="tel:+358415775344">+358 415 775 344</a></li>
                                <li><span class="icon fa fa-phone"></span> <strong>Ozgur Eren:</strong> <br> <a href="tel:+358415775343">+358 415 775 343</a></li>
                                <li>{{ __('homePage.working hours') }}: {{ __('homePage.Monday to Friday') }} 10:00 AM to 5:00 PM.</li>
                            </ul>
                            <ul class="social-box">
                                <li class="twitter"><a target="_blank" href="http://twitter.com/" class="fa fa-twitter"></a></li>
                                <li class="pinterest"><a target="_blank" href="http://pinterest.com/" class="fa fa-pinterest-p"></a></li>
                                <li class="pinterest"><a target="_blank" href="http://pinterest.com/" class="fa fa-instagram"></a></li>
                                <li class="facebook"><a target="_blank" href="http://facebook.com/" class="fa fa-facebook-f"></a></li>
                                <li class="dribbble"><a target="_blank" href="http://dribbble.com/" class="fa fa-dribbble"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-column col-lg-7 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="column col-lg-4 col-md-4 col-sm-12">
                                <h5>{{ __('homePage.About us') }}</h5>
                                <ul class="list">
                                    <li><a  href="/about">{{ __('homePage.About us') }}</a></li>
                                    <li><a  href="/about/solution-partner">{{ __('homePage.Solution partners') }}</a></li>
                                    <li><a  href="/about/projects">{{ __('homePage.projects') }}</a></li>
                                    <li><a  href="/gallery/images">{{ __('homePage.images') }}</a></li>
                                    <li><a  href="/gallery/videos">{{ __('homePage.videos') }}</a></li>
                                </ul>
                            </div>
                            <div class="column col-lg-4 col-md-4 col-sm-12">
                                <h5>{{ __('homePage.Need some help?') }}</h5>
                                <ul class="list">
                                    <li><a  href="/services/coaching">{{ __('homePage.coaching') }}</a></li>
                                    <li><a  href="/services/education">{{ __('homePage.Interpretation') }}</a></li>
                                    <li><a  href="/blog" class="{{ request()->segment(1) == 'blog' ? 'text-success' : '' }}" >{{ __('homePage.blog') }}</a></li>
                                    <li><a  href="/contact" class="{{ request()->segment(1) == 'contact' ? 'text-success' : '' }}" >{{ __('homePage.contact') }}</a></li>
                                </ul>
                            </div>
                            <div class="column col-lg-4 col-md-4 col-sm-12">
                                <h5>{{ __('homePage.Training') }}</h5>
                                <ul class="list">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="@if($locale == 'tr') {{ $category->slug }} @else {{ $category->{'slug_' . $locale} }} @endif" class="link" wire:key="{{ $category->id }}">
                                                @if($locale == 'tr') {{ $category->name }} @else {{ $category->{'name_' . $locale} }} @endif
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row clearfix">
                    <div class="copyright-column col-lg-6 col-md-12 col-sm-12">
                        <div class="copyright">Copyright {{ date('Y') }}, All Right Reserved</div>
                    </div>

                    <div class="nav-column col-lg-6 col-md-12 col-sm-12">
                        <ul>
                            <li><a href="#">SiteMap</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
