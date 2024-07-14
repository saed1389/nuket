<div>
    @livewire('partials.navbar')

    <section class="blog-page-section">
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/icons/icon-6.png') }})"></div>
        <div class="pattern-layer-three" style="background-image: url({{ asset('assets/images/icons/icon-4.png') }})"></div>
        <div class="auto-container">
            <!-- Page Breadcrumb -->
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Checkout</li>
            </ul>
            <div class="content-box">
                <h2>Checkout</h2>
                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Duis aute irure dolor in reprehenderit in </div>
            </div>
        </div>
        <div class="container">
            <div class="row ">
                <div class="form-column col-lg-9 col-md-9 col-sm-12">
                    <div class="inner-column">
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post"  >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="first_name" placeholder="First Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="last_name" placeholder="Last Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="address" placeholder="Address" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="city" placeholder="City" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="state" placeholder="State" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="zip_code" placeholder="Zip Code" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <h5>Select Payment Method</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="payment_method">
                                                <option value="">Please Select..</option>
                                                <option value="bank">Bank Transfer</option>
                                                <option value="card">Credit Card</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="payment_method">
                                                <option value="">Please Select..</option>
                                                <option value="bank">Bank Transfer</option>
                                                <option value="card">Credit Card</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12  mb-4">
                                    <h5>Summery</h5>
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

                            </div>
                        </div>
                    </div>
                    <button class="btn btn-block btn-primary mt-3 mb-3">Checkout</button>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <h5>Basket Summery</h5>
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('partials.footer')
</div>
