<div>
    <header class="main-header header-style-two">
        <div class="header-upper">
            <div class="outer-container clearfix">
                <div class="pull-left logo-box">
                    <div class="logo"><a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a></div>
                </div>
                <div class="nav-outer clearfix">
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="dropdown has-mega-menu"><a href="#"><span>{{ __('homePage.categories') }} <i class="fa fa-arrow-down"></i></span></a>
                                    <div class="mega-menu">
                                        <div class="upper-box">
                                            <div class="page-links-box">
                                                @foreach($categories as $category)
                                                    <a href="@if($locale == 'tr') {{ $category->slug }} @else {{ $category->{'slug_' . $locale} }} @endif" class="link" wire:key="{{ $category->id }}">
                                                        @if($locale == 'tr') {{ $category->name }} @else {{ $category->{'name_' . $locale} }} @endif
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="lower-box">
                                            <h3>{{ __('homePage.categories') }}</h3>
                                            <div class="text">Top instructors from around the Neque convallis a cras semper auctor. <br> Libero id faucibus nisl tincidunt egetnvallis </div>
                                            <div class="btn-box">
                                                <a  href="courses/categories" class="theme-btn btn-style-five">{{ __('homePage.See All Categories') }}</a>
                                            </div>
                                            <div class="side-icon">
                                                <img src="{{ asset('assets/images/resource/mega-menu-icon.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a  href="/" class="{{ request()->is('/') ? 'text-success' : '' }}">{{ __('homePage.home') }}</a></li>
                                <li class="dropdown"><a href="#">{{ __('homePage.About us') }}</a>
                                    <ul>
                                        <li><a  href="/about">{{ __('homePage.About us') }}</a></li>
                                        <li><a  href="/about/solution-partner">{{ __('homePage.Solution partners') }}</a></li>
                                        <li><a  href="/about/projects">{{ __('homePage.projects') }}</a></li>
                                    </ul>
                                </li>
                                <li><a  href="/courses">{{ __('homePage.Courses') }}</a></li>
                                <li class="dropdown"><a class="{{ request()->segment('1') == 'services' ? 'text-success' : '' }}" href="#">{{ __('homePage.Services') }}</a>
                                    <ul>
                                        <li><a  href="/services/coaching">{{ __('homePage.coaching') }}</a></li>
                                        <li><a  href="/services/education">{{ __('homePage.Interpretation') }}</a></li>
                                    </ul>
                                </li>
                                <li><a  href="/workshop" class="{{ request()->segment('1') == 'workshop' ? 'text-success' : '' }}">{{ __('homePage.workshops') }}</a></li>
                                <li class="dropdown"><a class="{{ request()->segment('1') == 'gallery' ? 'text-success' : '' }}" href="#">{{ __('homePage.gallery') }}</a>
                                    <ul>
                                        <li><a  href="/gallery/images">{{ __('homePage.images') }}</a></li>
                                        <li><a  href="/gallery/videos">{{ __('homePage.videos') }}</a></li>
                                    </ul>
                                </li>
                                <li><a  href="/blog" class="{{ request()->segment(1) == 'blog' ? 'text-success' : '' }}" >{{ __('homePage.blog') }}</a></li>
                                <li><a  href="/contact" class="{{ request()->segment(1) == 'contact' ? 'text-success' : '' }}" >{{ __('homePage.contact') }}</a></li>
                            </ul>
                        </div>
                    </nav>

                    <div class="outer-box clearfix">
                        {{--<div class="search-box">
                            <form method="post" action="">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="{{ __('homePage.search') }}" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>--}}
                        {{--<li class="nav-item dropdown web-drop">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/front/img').'/'.getCurrentCurrency().'.png' }}" alt=""> {{ strtoupper(getCurrentCurrency()) }}
                            </a>
                            <ul class="dropdown-menu drop-money " aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item {{ (getCurrentCurrency() == "usd") ? "d-none" : "" }}" href="{{ route('currency.set', ['currency' => 'usd']) }}"> <img src="{{ asset('assets/front/img/usd.png') }}" alt=""> USD </a></li>
                                <li><a class="dropdown-item {{ (getCurrentCurrency() == "try") ? "d-none" : "" }}" href="{{ route('currency.set', ['currency' => 'try']) }}"> <img src="{{ asset('assets/front/img/try.png') }}" alt=""> TRY </a></li>
                                <li><a class="dropdown-item {{ (getCurrentCurrency() == "eur") ? "d-none" : "" }}" href="{{ route('currency.set', ['currency' => 'eur']) }}"> <img src="{{ asset('assets/front/img/eur.png') }}" alt=""> EUR </a></li>
                                <li><a class="dropdown-item {{ (getCurrentCurrency() == "gbp") ? "d-none" : "" }}" href="{{ route('currency.set', ['currency' => 'gbp']) }}"> <img src="{{ asset('assets/front/img/gbp.png') }}" alt=""> GBP </a></li>
                            </ul>
                        </li>--}}
                        <div class="cart-box">
                            <form id="langform" action="{{ route('user.lang') }}" method="get">
                                <select class="form-select" name="lang" id="lang" onchange="this.form.submit()">
                                    <option disabled>Language</option>

                                    <option value="tr" @if (session('locale') ? session('locale') == 'tr' : $app == 'tr') selected @endif> Turkish</option>

                                    <option value="en" @if (session('locale') ? session('locale') == 'en' : $app == 'en') selected @endif> English</option>

                                    <option value="fi" @if (session('locale') ? session('locale') == 'fi' : $app == 'fi') selected @endif> Fine</option>
                                </select>
                            </form>
                        </div>

                        <div class="cart-box">
                            <div class="dropdown">
                                <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-bag-1"></span><span class="total-cart">2</span></button>
                                <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu1">

                                    <div class="cart-product">
                                        <div class="inner">
                                            <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                            <div class="image"><img src="{{ asset('assets/images/resource/post-thumb-1.jpg') }}" alt="" /></div>
                                            <h3><a href="shop-single.html">Product 01</a></h3>
                                            <div class="quantity-text">Quantity 1</div>
                                            <div class="price">$99.00</div>
                                        </div>
                                    </div>

                                    <div class="cart-total">Sub Total: <span>$198</span></div>
                                    <ul class="btns-boxed">
                                        <li><a href="/cart">View Cart</a></li>
                                        <li><a href="/checkout">CheckOut</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-4"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <div class="logo pull-left">
                    <a href="/" title=""><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a>
                </div>
                <div class="pull-right">
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <div class="outer-box clearfix"></div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a></div>
                <div class="menu-outer"></div>
            </nav>
        </div>
    </header>
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="" /></a>
                            </div>
                            <div class="contact-info">
                                <h2>{{ __('homePage.Contact Info') }}</h2>
                                <ul class="list-style-two">
                                    <li><span class="icon fa fa-location-arrow"></span>Laajakorvenkuja 6 D 31 Martinlaasko, 01620, Vantaa, Finland</li>
                                    <li><span class="icon fa fa-phone"></span><strong>Gulnaz Umsu:</strong> <br> <a href="tel:+358415775345">+358 415 775 345</a></li>
                                    <li><span class="icon fa fa-phone"></span><strong>Nuket Aygen Eren:</strong> <br> <a href="tel:+358415775344">+358 415 775 344</a></li>
                                    <li><span class="icon fa fa-phone"></span><strong>Ozgur Eren:</strong> <br> <a href="tel:+358415775343">+358 415 775 343</a></li>
                                    <li><span class="icon fa fa-clock-o"></span>{{ __('homePage.working hours') }}: {{ __('homePage.Monday to Friday') }} 10:00 AM to 5:00 PM.</li>
                                </ul>
                            </div>
                            <ul class="social-box">
                                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<script>
        document.getElementById("navbarDropdown2").addEventListener("click", function() {
            var dropdownMenu = document.getElementById("navbarDropdown2-ul");
            if (dropdownMenu.style.display === "block") {
                dropdownMenu.style.display = "none";
            } else {
                dropdownMenu.style.display = "block";
            }
        });
    </script>--}}
</div>
