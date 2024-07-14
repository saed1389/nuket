<div>
    @livewire('partials.navbar')

    <section class="blog-page-section">
        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/icons/icon-5.png') }})"></div>
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/icons/icon-6.png') }})"></div>
        <div class="pattern-layer-three" style="background-image: url({{ asset('assets/images/icons/icon-4.png') }})"></div>
        <div class="auto-container">
            <!-- Page Breadcrumb -->
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Categories</li>
            </ul>
            <div class="content-box">
                <h2>Categories</h2>
                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Duis aute irure dolor in reprehenderit in </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="row clearfix">

                <!-- News Block / Style Two -->
                <div class="news-block style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="{{ asset('assets/images/resource/news-6.jpg') }}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="border-layer"></div>

                            <h4><a href="blog-detail.html">All The Security & Privacy <br> Updates From Amazon’s</a></h4>
                            <a href="blog-detail.html" class="more">More <span class="fa fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @livewire('partials.footer')
</div>
