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
                                                @php
                                                    $locale = app()->getLocale();
                                                    $categories = \App\Models\Category::where('status', 1)->get()
                                                @endphp
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
                                                <a wire:navigate href="courses/categories" class="theme-btn btn-style-five">{{ __('homePage.See All Categories') }}</a>
                                            </div>
                                            <div class="side-icon">
                                                <img src="{{ asset('assets/images/resource/mega-menu-icon.png') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="/" class="{{ request()->is('/') ? 'text-success' : '' }}">{{ __('homePage.home') }}</a></li>
                                <li class="dropdown"><a wire:navigate href="#">{{ __('homePage.About us') }}</a>
                                    <ul>
                                        <li><a wire:navigate href="">{{ __('homePage.About us') }}</a></li>
                                        <li><a wire:navigate href="">{{ __('homePage.Solution partners') }}</a></li>
                                        <li><a wire:navigate href="">{{ __('homePage.projects') }}</a></li>
                                    </ul>
                                </li>
                                <li><a wire:navigate href="{{ url('courses') }}">{{ __('homePage.Courses') }}</a></li>
                                <li class="dropdown"><a href="#">{{ __('homePage.Services') }}</a>
                                    <ul>
                                        <li><a wire:navigate href="">{{ __('homePage.coaching') }}</a></li>
                                        <li><a wire:navigate href="">{{ __('homePage.education') }}</a></li>
                                    </ul>
                                </li>
                                <li><a wire:navigate href="">{{ __('homePage.workshops') }}</a></li>
                                <li class="dropdown"><a href="#">{{ __('homePage.gallery') }}</a>
                                    <ul>
                                        <li><a wire:navigate href="">{{ __('homePage.images') }}</a></li>
                                        <li><a wire:navigate href="">{{ __('homePage.videos') }}</a></li>
                                    </ul>
                                </li>
                                <li><a wire:navigate href="">{{ __('homePage.blog') }}</a></li>
                                <li><a wire:navigate href="">{{ __('homePage.contact') }}</a></li>
                            </ul>
                        </div>
                    </nav>


                    <div class="outer-box clearfix">

                        <div class="search-box">
                            <form method="post" action="">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Online course" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

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

                        <!-- Cart Box -->
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
                                    <div class="cart-product">
                                        <div class="inner">
                                            <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                            <div class="image"><img src="{{ asset('assets/images/resource/post-thumb-2.jpg') }}" alt="" /></div>
                                            <h3><a href="shop-single.html">Product 02</a></h3>
                                            <div class="quantity-text">Quantity 1</div>
                                            <div class="price">$99.00</div>
                                        </div>
                                    </div>
                                    <div class="cart-total">Sub Total: <span>$198</span></div>
                                    <ul class="btns-boxed">
                                        <li><a href="shoping-cart.html">View Cart</a></li>
                                        <li><a href="checkout.html">CheckOut</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <!-- Nav Btn -->
                        <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-4"></span></div>

                    </div>
                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title=""><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">

                    </div>

                </div>
            </div>
        </div>
        <!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->

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
                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                                <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-two">
                                    <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                                    <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                    <li><span class="icon fa fa-envelope"></span>lebari@gmail.com</li>
                                    <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
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
</div>
