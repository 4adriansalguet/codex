@extends('layouts.app')

@section('title', 'Search Engine Optimization')

@section('content')
    <div class="pages">

        <div class="hero-pages">
            <div class="d-flex align-items-center justify-content-center flex-column sub-hero" data-aos="fade-up" data-aos-delay="100">
                <h1 class="display-3 fw-bold" data-aos="zoom-out">Search Engine Optimization</h1>
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
                                            <p><del>$900</del></p>
                                            <h1>$200</h1>
                                            <p>Basic Search Engine Optimization</p>
                                        </div>
                                        <div class="col-lg-4 col-4 text-center">
                                            <img src="{{asset('./codex-assets/pricing/price2.png')}}" alt="price1" class="img-fluid my-2">
                                            <p><del>$1,200</del></p>
                                            <h1>$500</h1>
                                            <p>Advance Search Engine Optimization</p>
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
                <h2 class="text-primary mb-4" data-aos="fade-up" data-aos-delay="100">SEO Breakdown</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card border-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body ps-0">
                                <img src="{{asset('./codex-assets/pricing/price1.png')}}" alt="price1" class="img-fluid my-2">

                                <h5>Basic Search Engine Optimization</h5>
                                <hr>

                                <a href="{{route('get.quote', ['price_img_url'=>asset('codex-assets/pricing/price1.png'), 'project_type'=>'SEO', 'pricing_name'=>'Basic Search Engine Optimization', 'price'=>'$200'])}}" class="btn btn-primary">Get a Quote</a>
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
                                        <p>Keyword Research</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>5 Keywords</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Google Friendly Site Map</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Link Building</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Social Bookmarking</p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-package'></i> &nbsp; Resources</h5>
                                <hr>

                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Basic Analytical Report</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>In-depth Site Analysis</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Content Duplicity Check</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Initial Backlinks analysis</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Mobile Usability Checks</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Competition Analysis</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Informational Content Writing & Sharing - 2 Per Month
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Blog Writing - 1 Per Month
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Press Release Social Bookmarking
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>NAP Syndication
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Google My Business / Bing Local Listing
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Citation Building
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Classified Submissions
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Google Analytics Analysis Report
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>SEO Reports
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Search Engine Rank Report
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Monthly Action Plan
                                        </p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Activity Report
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card border-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body ps-0">
                                <img src="{{asset('./codex-assets/pricing/price2.png')}}" alt="price1" class="img-fluid my-2">

                                <h5>Advance Search Engine Optimization</h5>
                                <hr>

                                <a href="{{route('get.quote', ['price_img_url'=>asset('codex-assets/pricing/price2.png'), 'project_type'=>'SEO', 'pricing_name'=>'Advance Search Engine Optimization', 'price'=>'$500'])}}" class="btn btn-primary">Get a Quote</a>
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
                                        <p>Keyword Research</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>10 Keywords</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Guaranteed Ranking on Google</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Off-site Optimization</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>On-site Optimization</p>
                                    </div>
                                </div>

                                <h5 class="text-primary"><i class='bx bx-package'></i> &nbsp; Resources</h5>
                                <hr>

                                <div class="mb-4">
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Link Building</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Social Bookmarking</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>In-depth Site Analysisn</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Content Duplicacy Check</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Twitter Page Design</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Initial Backlinks Analysis</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Google Penalty Check</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Mobile Usability Check</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Competition Analysis</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Title & Meta Tags Optimization</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Content Optimization</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Page Speed Analysis & Optimizationk</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>HTML Code Cleanup & Optimization</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Internal Link Structuring & Optimization</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Pages H tags Optimization</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Canonicalization/301 Redirect</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>ebsite Page Load Optimization</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Schema Markup Implementation</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Image & Hyperlink Optimization</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Robots.txt Creation/Analysis</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Blog Writing (2 - Per Month)</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Informational Content Writing & Sharing (1 Per Month)</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Press Release Writing & Distribution</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Press Release Social Bookmarking</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Google Webmaster Tools Setup</p>
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <i class='bx bx-check bx-sm'></i>
                                        <p>Google Analytics Setup & Integration</p>
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