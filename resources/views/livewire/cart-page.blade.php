<div>
    @livewire('partials.navbar')

    <section class="blog-page-section">
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/icons/icon-6.png') }})"></div>
        <div class="pattern-layer-three" style="background-image: url({{ asset('assets/images/icons/icon-4.png') }})"></div>
        <div class="auto-container">
            <!-- Page Breadcrumb -->
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Shopping Cart</li>
            </ul>
            <div class="content-box">
                <h2>Shopping Cart</h2>
                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Duis aute irure dolor in reprehenderit in </div>
            </div>
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-md-9">
                    <table class="table table-responsive-lg">
                        <thead>
                        <tr>
                            <th>Course</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center mb-4">
                                    <strong>Summery</strong>
                                </div>
                                <hr>
                                <div class="col-md-6">
                                    <p>Subtotal:</p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <p>$600</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Taxes:</p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <p>$600</p>
                                </div>
                                <hr class="">
                                <div class="col-md-6 mt-4">
                                    <strong>Total:</strong>
                                </div>
                                <div class="col-md-6 mt-4 text-end">
                                    <p>$600</p>
                                </div>
                                <button class="btn btn-block btn-primary">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('partials.footer')
</div>
