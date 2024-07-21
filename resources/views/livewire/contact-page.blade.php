<div>
    <div class="preloader"></div>
    @livewire('partials.navbar')
    <section class="contact-banner-section">
        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/icons/icon-5.png') }})"></div>
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/icons/icon-6.png') }})"></div>
        <div class="pattern-layer-three" style="background-image: url({{ asset('assets/images/icons/icon-4.png') }})"></div>
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="/">{{ __('homePage.home') }}</a></li>
                <li>{{ __('homePage.contact') }}</li>
            </ul>
            <div class="content-box">
                <h2>{{ __('homePage.Contact Now') }} <a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></a></h2>
                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Duis aute irure dolor in reprehenderit in </div>
            </div>
        </div>
    </section>
    <section class="contact-page-section">
        <div class="pattern-layer-three" style="background-image: url({{ asset('assets/images/icons/icon-8.png')  }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title">{{ __('homePage.GET IN TOUCH') }}</div>
                        <h2>Visit one of our agency locations <br> or contact us today</h2>
                        <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </div>
                        <ul>
                            <li><span>{{ __('homePage.address') }}</span>Laajakorvenkuja 6 D 31 Martinlaasko, 01620, Vantaa, Finland</li>
                            <li><span>{{ __('homePage.our phones') }}</span><strong>Gulnaz Umsu:</strong> <a href="tel:+358415775345">+358 415 775 345</a><br><strong>Nuket Aygen Eren:</strong> <a href="tel:+358415775344">+358 415 775 344</a>
                                <br><strong>Ozgur Eren:</strong> <a href="tel:+358415775343">+358 415 775 343</a></li>
                            <li><span>{{ __('homePage.our emails') }}</span><strong>Gulnaz Umsu:</strong> <a href="mailto:gulnaz@olektia.com">gulnaz@olektia.com</a><br><strong>Nuket Aygen Eren:</strong> <a href="mailto:nuket@olektia.com">nuket@olektia.com</a>
                                <br><strong>Ozgur Eren:</strong> <a href="mailto:ozgur@olektia.com">ozgur@olektia.com</a>
                            <li><span>{{ __('homePage.working hours') }}</span>{{ __('homePage.Monday to Friday') }}: 10:00 - 17:00</li>
                        </ul>
                    </div>
                </div>
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="circle-layer"></div>
                        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/icons/icon-7.png') }})"></div>
                        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/icons/icon-9.png') }})"></div>
                        <h2>{{ __('homePage.Leave a message') }}</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut <br> blandit arcu in pretium.</div>
                        <div class="contact-form">
                            <form method="post" >
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="{{ __('homePage.name') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="{{ __('homePage.email') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="{{ __('homePage.phone') }}" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="" name="message" placeholder="{{ __('homePage.message') }}" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-five" type="submit" name="submit-form">{{ __('homePage.Leave a message') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-contact-section">
        <div class="auto-container">
            <div class="map-boxed">
                <div class="map-outer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1977.8806754770503!2d24.839825513074814!3d60.2819681749858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468df76d674f666b%3A0x91900cdc5a4379d!2sLaajakorvenkuja%206d%2031%2C%2001620%20Vantaa%2C%20Finland!5e0!3m2!1sen!2s!4v1721500815267!5m2!1sen!2s" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    @livewire('partials.footer')
</div>
