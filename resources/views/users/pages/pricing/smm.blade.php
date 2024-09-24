@extends('layouts.app')

@section('title', 'Social Media Management')

@section('content')
    <div class="pages">

        <div class="hero-pages">
            <div class="d-flex align-items-center justify-content-center flex-column sub-hero" data-aos="fade-up" data-aos-delay="100">
                <h1 class="display-3 fw-bold" data-aos="zoom-out">Social Media Management</h1>
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
                                            <p><del>$2000</del></p>
                                            <h1>$999</h1>
                                            <p>Starting</p>
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
                <h2 class="text-primary mb-4" data-aos="fade-up" data-aos-delay="100">SMM Breakdown</h2>
                <div class="row justify-content-start">
                    <div class="col-lg-6">
                        <div class="card border-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body ps-0">
                                <img src="{{asset('./codex-assets/pricing/price1.png')}}" alt="price1" class="img-fluid my-2">

                                <h5>Social Media Management</h5>
                                <hr>

                                <a href="{{route('get.quote', ['price_img_url'=>asset('codex-assets/pricing/price1.png'), 'project_type'=>'SMM', 'pricing_name'=>'Starting', 'price'=>'$900'])}}" class="btn btn-primary">Get a Quote</a>
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
                                        <p>Social Media Page Setup</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Social Media Profile Audit</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Strategy Development</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Organic Audience Expansion (Minimum of 100 Page Likes/ Followers)</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Organic Social Promotion</p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-package'></i> &nbsp; Includes</h5>
                                <hr>

                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Text Post Creation and Posting (10)</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Image Post Creation and Posting (10)</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>GIF Post Creation and Posting (5)</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Monthly Reporting</p>
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