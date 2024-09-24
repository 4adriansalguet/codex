@extends('layouts.app')

@section('title', 'E-Commerce')

@section('content')
    <div class="pages">

        <div class="hero-pages">
            <div class="d-flex align-items-center justify-content-center flex-column sub-hero" data-aos="fade-up" data-aos-delay="100">
                <h1 class="display-3 fw-bold" data-aos="zoom-out">E-Commerce</h1>
            </div>
        </div>

        <section class="pricing-section-1 section-overlap-top" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body">
                            <div class="row text-center">
                                <div class="col-lg-12">
                                    <div class="row h-100 justify-content-center align-items-center">
                                        <div class="col-lg-4 col-4 text-center">
                                            <img src="{{asset('./codex-assets/pricing/price1.png')}}" alt="price1" class="img-fluid my-2">
                                            <p><del>$2,500</del></p>
                                            <h1>$999</h1>
                                            <p>Starting</p>
                                        </div>
                                        <div class="col-lg-4 col-4 text-center">
                                            <img src="{{asset('./codex-assets/pricing/price2.png')}}" alt="price1" class="img-fluid my-2">
                                            <p><del>$3,600</del></p>
                                            <h1>$1,499</h1>
                                            <p>Professional</p>
                                        </div>
                                        <div class="col-lg-4 col-4 text-center">
                                            <img src="{{asset('./codex-assets/pricing/price3.png')}}" alt="price1" class="img-fluid my-2">
                                            <p><del>$7,400</del></p>
                                            <h1>$2,999</h1>
                                            <p>Royalty</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pricing-section-2">
            <div class="container">
                <h2 class="text-primary mb-4" data-aos="fade-up" data-aos-delay="100">E-Commerce Breakdown</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card border-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body ps-0">
                                <img src="{{asset('./codex-assets/pricing/price1.png')}}" alt="price1" class="img-fluid my-2">

                                <h5>Starting</h5>
                                <hr>

                                <a href="{{route('get.quote', ['price_img_url'=>asset('codex-assets/pricing/price1.png'), 'project_type'=>'E-Commerce', 'pricing_name'=>'Starting', 'price'=>'$999'])}}" class="btn btn-primary">Get a Quote</a>
                                <div class="mb-4 mt-2">
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                </div>
                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Up to 7 Pages</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>3  Banner Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>5 Stock Photos</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Up to 100 Products</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Up to 7 Categories</p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-package'></i> &nbsp; Resources</h5>
                                <hr>

                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>1 jQuery Slider Banner</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Simple Product Upload</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Full Shopping Cart Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Payment Module Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Sales & Inventory Management</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Complete Deployment</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Facebook Page Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Instagram Page Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Twitter Page Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Google Map Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Captcha Integrationd</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Google Friendly Site Map</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Social Media Linking</p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-layer-plus'></i> &nbsp; Add-ons</h5>
                                <hr>

                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>25 Product Upload - $10</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>1 Unique Page - $25</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Complex Product Upload - $149</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body ps-0">
                                <img src="{{asset('./codex-assets/pricing/price2.png')}}" alt="price1" class="img-fluid my-2">

                                <h5>Professional</h5>
                                <hr>

                                <a href="{{route('get.quote', ['price_img_url'=>asset('codex-assets/pricing/price2.png'), 'project_type'=>'E-Commerce', 'pricing_name'=>'Professional', 'price'=>'$1,499'])}}" class="btn btn-primary">Get a Quote</a>
                                <div class="mb-4 mt-2">
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                </div>
                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Up to 10 Pages </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Up to 100 Products</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Up to 30 Categories</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>3 Unique Banner Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>1 jQuery Slider Banner</p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-package'></i> &nbsp; Resources</h5>
                                <hr>

                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>10 Stock Photos</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Conceptual and Dynamic Website</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Content Management System </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Mobile Responsiveness</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Easy Product Search</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Product Review</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Full Shopping Cart Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Payment Module Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Sales & Inventory Management</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Complete Deployment</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Dedicated Accounts Manager</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Facebook Page Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Twitter Page Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Instagram Page Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Google Map Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Captcha Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Google Friendly Site Map</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Social Media Linking</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free 1 Year Hosting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body ps-0">
                                <img src="{{asset('./codex-assets/pricing/price3.png')}}" alt="price1" class="img-fluid my-2">

                                <h5>Royalty</h5>
                                <hr>

                                <a href="{{route('get.quote', ['price_img_url'=>asset('codex-assets/pricing/price3.png'), 'project_type'=>'E-Commerce', 'pricing_name'=>'Royalty', 'price'=>'$2,999'])}}" class="btn btn-primary">Get a Quote</a>
                                <div class="mb-4 mt-2">
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                    <i class='bx bxs-star bx-xs'></i>
                                </div>
                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Up to 15 Pages</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Unlimited Products</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Unlimited Categories</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>6 Unique Banner Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Up to 3 jQuery Slider Banner</p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-package'></i> &nbsp; Resources</h5>
                                <hr>

                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>20 Stock Photos</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Content Management System</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Product Rating & Reviews</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Easy Product Search</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Payment Gateway Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Customer Log-in Area</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Social Media Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Tell a Friend Feature
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>E-Commerce Store Design
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Product Detail Page Design
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Sales & Inventory Management
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Dedicated Accounts Manager
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Mobile Responsive
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Icon and Logo Designs
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Conceptual and Dynamic Website
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Complete Deployment
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Print Media
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Stationary Design
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>siness Card
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Letterhead
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Envelope
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Invoice Design
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Email Signature
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Bi-Fold Brochure (OR) 2 Sided Flyer Design
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Value Added Services
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Product Catalog Design
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Signage Design or Label Design
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>All Final File Formats
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Facebook Page Design
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Instagram Page Design
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Twitter Page Design
                                        </p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-layer-plus'></i> &nbsp; Add-ons</h5>
                                <hr>

                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Mobile Responsive - $99</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Content Management System - $139</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Captcha - $99</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Google Friendly Site Map - $99</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection