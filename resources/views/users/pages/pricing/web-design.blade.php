@extends('layouts.app')

@section('title', 'Web Design')

@section('content')
    <div class="pages">

        <div class="hero-pages">
            <div class="d-flex align-items-center justify-content-center flex-column sub-hero" data-aos="fade-up" data-aos-delay="100">
                <h1 class="display-3 fw-bold" data-aos="zoom-out">Web Design</h1>
            </div>
        </div>

        <section class="pricing-section-1 section-overlap-top" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row h-100 justify-content-center align-items-center">
                                        <div class="col-lg-4 col-4 text-center">
                                            <img src="{{asset('./codex-assets/pricing/price1.png')}}" alt="price1" class="img-fluid my-2">
                                            <p><del>$550</del></p>
                                            <h1>$249</h1>
                                            <p>Starting</p>
                                        </div>
                                        <div class="col-lg-4 col-4 text-center">
                                            <img src="{{asset('./codex-assets/pricing/price2.png')}}" alt="price1" class="img-fluid my-2">
                                            <p><del>$1,200</del></p>
                                            <h1>$499</h1>
                                            <p>Professional</p>
                                        </div>
                                        <div class="col-lg-4 col-4 text-center">
                                            <img src="{{asset('./codex-assets/pricing/price3.png')}}" alt="price1" class="img-fluid my-2">
                                            <p><del>$2,000</del></p>
                                            <h1>$899</h1>
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

        <section class=pricing-section-2">
            <div class="container">
                <h2 class="text-primary mb-4" data-aos="fade-up" data-aos-delay="100">Web Design Breakdown</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card border-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body ps-0">
                                <img src="{{asset('./codex-assets/pricing/price1.png')}}" alt="price1" class="img-fluid my-2">

                                <h5>Starting</h5>
                                <hr>

                                <a href="{{route('get.quote', ['price_img_url'=>asset('codex-assets/pricing/price1.png'), 'project_type'=>'Web Design', 'pricing_name'=>'Starting', 'price'=>'$249'])}}" class="btn btn-primary">Get a Quote</a>
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
                                        <p>5 Page Website</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>5 Stock Photos</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>3 Banner Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>1 jQuery Slider Banner</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>48 to 72 hours Turnaround Time</p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-package'></i> &nbsp; Resources</h5>
                                <hr>

                                <div class="mb-4">
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
                                        <p>Free Social Media Linking</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>100% Satisfaction Guarantee</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>100% Unique Design Guarantee</p>
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
                    <div class="col-lg-4">
                        <div class="card border-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body ps-0">
                                <img src="{{asset('./codex-assets/pricing/price2.png')}}" alt="price1" class="img-fluid my-2">

                                <h5>Professional</h5>
                                <hr>

                                <a href="{{route('get.quote', ['price_img_url'=>asset('codex-assets/pricing/price2.png'), 'project_type'=>'Web Design', 'pricing_name'=>'Professional', 'price'=>'$499'])}}" class="btn btn-primary">Get a Quote</a>
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
                                        <p>Up to 15 Unique Pages Website</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>8 Stock Photos</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>3 Unique Banner Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>1 jQuery Slider Banner</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>48 to 72 hours Turnaround Time</p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-package'></i> &nbsp; Resources</h5>
                                <hr>

                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Content Management System</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Custom Forms</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>News Feed Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Social Media Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Search Engine Submission</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Dedicated Project Manager</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Complete Deployment</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Online Reservation/ Appointment Tool (Optional)
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Ondivne Payment Integration (Optional)
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Lead Capturing Forms (Optional)
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Newsletter Subscription (Optional)
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Conceptual and Dynamic Website
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Striking Hover Effects
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Mobile Responsive
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Google Map Integration
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Captcha Integration
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Google Friendly Site Map
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Free Social Media linking
                                        </p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-layer-plus'></i> &nbsp; Add-ons</h5>
                                <hr>

                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Online Reservation/ Appointment Tool - $</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Online Payment Integration - $</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Lead Capturing Forms - $</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Newsletter Subscription - $</p>
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

                                <a href="{{route('get.quote', ['price_img_url'=>asset('codex-assets/pricing/price3.png'), 'project_type'=>'Web Design', 'pricing_name'=>'Royalty', 'price'=>'$899'])}}" class="btn btn-primary">Get a Quote</a>
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
                                        <p>Up to 15 Unique Pages Website</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>8 Stock Photos</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>3 Unique Banner Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>1 jQuery Slider Banner</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>48 to 72 hours Turnaround Time</p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-package'></i> &nbsp; Resources</h5>
                                <hr>

                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Content Management System</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Custom Forms</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>News Feed Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Social Media Integration</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Search Engine Submission</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Dedicated Project Manager</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Complete Deployment</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Online Reservation/ Appointment Tool (Optional)
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Online Payment Integration (Optional)
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Lead Capturing Forms (Optional)
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Newsletter Subscription (Optional)
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Conceptual and Dynamic Website
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Striking Hover Effects
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Mobile Responsive
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Free Google Map Integration
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Free Captcha Integration
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Free Google Friendly Site Map
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check'></i>
                                        <p>Free Social Media Linking
                                        </p>
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