@extends('layouts.app')

@section('title', 'Web Guru')

@section('content')

    {{-- hero --}}
    <section id="hero" class="hero w-100 vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center hero-left">
                    <div>
                        <h5 data-aos="fade-up" data-aos-delay="500">Inspiring your Imagination</h5>
                        <h5 data-aos="fade-up" data-aos-delay="600">to make it into Reality</h5>
                        <p class="mb-4" data-aos="fade-up" data-aos-delay="700">To help you grow your business, we design flexible web sites that use the most resilient technologies available.</p>
                        <div data-aos="fade-up" data-aos-delay="800">
                            <div class="text-center text-lg-start">
                                <a href="{{route('get.quote')}}" class="btn btn-primary btn-lg">Get a Free Quote
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-right">
                    <lottie-player data-aos="zoom-out" data-aos-delay="800" class="img-fluid" src="https://assets9.lottiefiles.com/packages/lf20_es4p9zph.json" mode="bounce" background="transparent"  speed="1" loop  autoplay></lottie-player>
                </div>
            </div>
        </div>
    </section>
    {{-- end hero --}}
    
    <main>
        {{-- about --}}
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('./codex-assets/section2-img.png')}}" class="img-fluid py-4" alt="about us">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="font-weight-bold">Create with the heart, build with the mind.</h2>
                        <p>A full-service correlation coefficient branding and executing ideas founded by a group of unconventional and analytical thinkers.</p>
                        <div class="list">
                            <ul>
                                <li class="d-flex align-items-center">
                                    <i class='bx bx-check'></i>
                                    Professional Website Design Services
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class='bx bx-check'></i>
                                    Transforming ideas into reality in our work
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class='bx bx-check'></i>
                                    Let the people know your Brand
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class='bx bx-check'></i>
                                    Connect with you clients
                                </li>
                            </ul>
                        </div>
                        <div class="mt-1">
                            <a href="{{route('get.quote')}}" class="btn btn-outline-primary btn-lg">Schedule a consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end about --}}

        {{-- feature --}}
        <section id="features" class="features">
            <div class="container text-center">
                <h5 class="section-title mb-3" data-aos="fade-up" data-aos-delay="100">FEATURE</h5>
                <h1 class="text-primary sub-title" data-aos="fade-up" data-aos-delay="200">Check Our Specialty</h1>
                <div class="my-4">
                    <div class="row">
                        <div data-aos="fade-up" data-aos-delay="300" class="col-lg-4 col-md-6">
                            <div class="box-w-icon first-row mb-4 d-flex flex-column align-items-center shadow-sm text-center p-4">
                                <img src="{{asset('./codex-assets/feature-img/f1.png')}}" alt="f1" class="w-50 mb-3">
                                <h5 class="my-4">Defining The Power of Creativity</h5>
                                <p>Creation and design of a unique website with strategic considerations to more conversions, more brand engagement, and more quantifiable outcomes.</p>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="300" class="col-lg-4 col-md-6">
                            <div class="box-w-icon first-row mb-4 d-flex flex-column align-items-center shadow-sm text-center p-4">
                                <img src="{{asset('./codex-assets/feature-img/f2.png')}}" alt="f1" class="w-50 mb-3">
                                <h5 class="my-4">Finding The Right Clientele</h5>
                                <p>Our professionals create user personas for you and do in-depth research to make sure your website design draws in and keeps your target audience.</p>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="300" class="col-lg-4 col-md-6">
                            <div class="box-w-icon first-row mb-4 d-flex flex-column align-items-center shadow-sm text-center p-4">
                                <img src="{{asset('./codex-assets/feature-img/f3.png')}}" alt="f1" class="w-50 mb-3">
                                <h5 class="my-4">One of a Kind</h5>
                                <p>Our experts ensure that each element of your website design accurately represents your unique personality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div data-aos="zoom-in-up" data-aos-delay="100" class="col-lg-3 col-md-6">
                            <div class="box-w-icon mb-4 d-flex align-items-center justify-content-center shadow-sm">
                                <i class='bx bx-code-alt text-warning'></i>
                                <h6>Optimized Coding Procedure</h6>
                            </div>
                        </div>
                        <div data-aos="zoom-in-up" data-aos-delay="3200" class="col-lg-3 col-md-6">
                            <div class="box-w-icon mb-4 d-flex align-items-center justify-content-center shadow-sm">
                                <i class='bx bx-list-plus text-info'></i>
                                <h6>Creativity is Our Strong Suit</h6>
                            </div>
                        </div>
                        <div data-aos="zoom-in-up" data-aos-delay="300" class="col-lg-3 col-md-6">
                            <div class="box-w-icon mb-4 d-flex align-items-center justify-content-center shadow-sm">
                                <i class='bx bxs-timer text-primary'></i>
                                <h6>We Meet Deadlines</h6>
                            </div>
                        </div>
                        <div data-aos="zoom-in-up" data-aos-delay="400" class="col-lg-3 col-md-6">
                            <div class="box-w-icon mb-4 d-flex align-items-center justify-content-center shadow-sm">
                                <i class='bx bxs-color text-secondary'></i>
                                <h6>Well Constructed UI and UX</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end feature --}}

        {{-- pricing --}}
        <section id="pricing" class="pricing bg-s-light">
            <div class="text-center container">
                <h5 class="section-title mb-3" data-aos="fade-up" data-aos-delay="100">PRICING</h5>
                <h1 class="text-primary sub-title" data-aos="fade-up" data-aos-delay="200">Check Our Pricing</h1>
                <div class="my-4">

                    {{-- sliding price --}}
                    <div id="pricingCarousel" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-indicators" data-aos="fade-up" data-aos-delay="300">
                            <button type="button" data-bs-target="#pricingCarousel" data-bs-slide-to="0" class="btn mb-2 shadow-sm active" aria-current="true" aria-label="Slide 1">Web Design</button>
                            <button type="button" data-bs-target="#pricingCarousel" data-bs-slide-to="1" class="btn mb-2 shadow-sm" aria-label="Slide 2">E - Commerce</button>
                            <button type="button" data-bs-target="#pricingCarousel" data-bs-slide-to="2" class="btn mb-2 shadow-sm" aria-label="Slide 3">SEO</button>
                            <button type="button" data-bs-target="#pricingCarousel" data-bs-slide-to="3" class="btn mb-2 shadow-sm" aria-label="Slide 3">SMM</button>
                        </div>
                        <div class="carousel-inner" data-aos="fade-up" data-aos-delay="400">
                          <div data-slide="1" class="carousel-item web-design active" data-bs-interval="10000">
                            <div class="row">

                                <div class="col-lg-4 col-sm-6">
                                    <div class="card p-4 shadow-sm border-0"">
                                      <div class="card-body text-start">
                                        <img src="{{asset('./codex-assets/pricing/price1.png')}}" alt="price1" class="img-fluid my-2">
                                        <h1 class="price my-3">$249 <del>$550</del></h1>
                                        <h6 class="card-title">Starting Website Package</h6>
                                        <hr>
                                        <div class="pricing-list">
                                            <ul>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>5 Page Website</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>5 Stock Photos</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>3 Banner Design</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>1 jQuery Slider Banner</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>48 to 72 hours Turnaround Time</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('pricing.webdesign')}}" class="btn btn-lg btn-primary">Show More</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card p-4 shadow-sm border-0 popular">
                                      <div class="card-body text-start">
                                        <img src="{{asset('./codex-assets/pricing/price2.png')}}" alt="price1" class="img-fluid my-2">
                                        <h1 class="price my-3">$499 <del>$1,200</del></h1>
                                        <h6 class="card-title">Professional Website Package</h6>
                                        <hr>
                                        <div class="pricing-list">
                                            <ul>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>8 Stock Photos</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>10 Page Website</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>5 Banner Designs</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>1 jQuery Slider Banner</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>48 to 72 hours Turnaround Time</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('pricing.webdesign')}}" class="btn btn-lg btn-primary">Show More</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card p-4 shadow-sm border-0">
                                      <div class="card-body text-start">
                                        <img src="{{asset('./codex-assets/pricing/price3.png')}}" alt="price1" class="img-fluid my-2">
                                        <h1 class="price my-3">$899 <del>2,000</del></h1>
                                        <h6 class="card-title">Royalty Website Package</h6>
                                        <hr>
                                        <div class="pricing-list">
                                            <ul>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Up to 15 Unique Pages Website</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>8 Stock Photos</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>3 Unique Banner Design</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>1 jQuery Slider Banner</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>48 to 72 hours Turnaround Time</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('pricing.webdesign')}}" class="btn btn-lg btn-primary">Show More</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div data-slide="2" class="carousel-item e-commerce" data-bs-interval="10000">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card p-4 shadow-sm border-0">
                                      <div class="card-body text-start">
                                        <img src="{{asset('./codex-assets/pricing/price1.png')}}" alt="price1" class="img-fluid my-2">
                                        <h1 class="price my-3">$999 <del>$2,500</del></h1>
                                        <h6 class="card-title">Starting Website Package</h6>
                                        <hr>
                                        <div class="pricing-list">
                                            <ul>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Up to 15 Pages</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>3  Banner Design</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>5 Stock Photos</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Up to 100 Products</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Up to 7 Categories</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('pricing.ecommerce')}}" class="btn btn-lg btn-primary">Show More</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card p-4 shadow-sm border-0">
                                      <div class="card-body text-start">
                                        <img src="{{asset('./codex-assets/pricing/price2.png')}}" alt="price1" class="img-fluid my-2">
                                        <h1 class="price my-3">$1,499 <del>$$3,600</del></h1>
                                        <h6 class="card-title">Professional Website Package</h6>
                                        <hr>
                                        <div class="pricing-list">
                                            <ul>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Up to 50 Pages </h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Up to 1,000 Products</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Up to 30 Categories</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>3 Unique Banner Design</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>1 jQuery Slider Banner</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('pricing.ecommerce')}}" class="btn btn-lg btn-primary">Show More</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card p-4 shadow-sm border-0">
                                      <div class="card-body text-start">
                                        <img src="{{asset('./codex-assets/pricing/price3.png')}}" alt="price1" class="img-fluid my-2">
                                        <h1 class="price my-3">$2,999 <del>7,400</del></h1>
                                        <h6 class="card-title">Royalty Website Package</h6>
                                        <hr>
                                        <div class="pricing-list">
                                            <ul>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Up to 50 Pages</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Unlimited Products</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Unlimited Categories</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>6 Unique Banner Design</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Up to 3 jQuery Slider Banner</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('pricing.ecommerce')}}" class="btn btn-lg btn-primary">Show More</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div data-slide="3" class="carousel-item seo" data-bs-interval="10000">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card p-4 shadow-sm border-0">
                                      <div class="card-body text-start">
                                        <img src="{{asset('./codex-assets/pricing/price1.png')}}" alt="price1" class="img-fluid my-2">
                                        <h1 class="price my-3">$200 <del>$900</del></h1>
                                        <h6 class="card-title">Basic Search Engine Optimization</h6>
                                        <hr>
                                        <div class="pricing-list">
                                            <ul>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Keyword Research</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>5 Keywords</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Google Friendly Site Map</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Link Building</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Social Bookmarking</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('pricing.seo')}}" class="btn btn-lg btn-primary">Show Moree</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card p-4 shadow-sm border-0">
                                      <div class="card-body text-start">
                                        <img src="{{asset('./codex-assets/pricing/price2.png')}}" alt="price1" class="img-fluid my-2">
                                        <h1 class="price my-3">$500 <del>$900</del></h1>
                                        <h6 class="card-title">Advance Search Engine Optimization</h6>
                                        <hr>
                                        <div class="pricing-list">
                                            <ul>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Keyword Research</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>10 Keywords</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Guaranteed Ranking on Google</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Off-site Optimization</h5>
                                                </li>
                                                <li class="mb-2 d-flex">
                                                    <i class='bx bx-check'></i>
                                                    <h5>On-site Optimization</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('pricing.seo')}}" class="btn btn-lg btn-primary">Show More</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div data-slide="4" class="carousel-item smm" data-bs-interval="10000">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card text-left p-4 shadow-sm border-0">
                                      <div class="card-body text-center">
                                        <h4 class="card-title">E-Commerce Website</h4>
                                        <h1 class="price my-3">$1400</h1>
                                        <img src="{{asset('./codex-assets/pricing/price3.png')}}" alt="price1" class="img-fluid my-4">
                                        <div class="pricing-list">
                                            <ul>
                                                <li class="d-flex align-items-center justify-content-center mb-2">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Social Media Page Setup</h5>
                                                </li>
                                                <li class="d-flex align-items-center justify-content-center mb-2">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Social Media Profile Audit</h5>
                                                </li>
                                                <li class="d-flex align-items-center justify-content-center mb-2">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Strategy Development</h5>
                                                </li>
                                                <li class="d-flex align-items-center justify-content-center mb-2">
                                                    <i class='bx bx-check'></i>
                                                    <h5>Organic Social Promotion.</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('pricing.smm')}}" class="btn btn-lg btn-primary">Show More</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    {{-- end sliding price --}}
                </div>
            </div>
        </section>
        {{-- end pricing --}}

        {{-- services --}}
        <section id="services" class="services">
            <div class="container text-center">
                <h5 class="section-title mb-3" data-aos="fade-up" data-aos-delay="100">Services</h5>
                <h1 class="text-primary sub-title" data-aos="fade-up" data-aos-delay="200">Check Our Services</h1>
                <div class="my-4">
                    <div class="row">
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 mb-4  px-2 py-2 shadow-sm border-0 border-top border-primary border-2">
                                <div class="d-flex justify-content-center align-items-center services-icon">
                                    <i class='bx bx-code-alt'></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-2">Web Development</h5>
                                    <p class="card-text">We analyze, innovate, and fulfill your website service needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 mb-4  px-2 py-2 shadow-sm border-0 border-top border-primary border-2">
                                <div class="d-flex justify-content-center align-items-center services-icon">
                                    <i class='bx bxs-paint' ></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-2">Web Design</h5>
                                    <p class="card-text">We go beyond the constraints of merely producing a design.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 mb-4  px-2 py-2 shadow-sm border-0 border-top border-primary border-2">
                                <div class="d-flex justify-content-center align-items-center services-icon">
                                    <i class='bx bx-search-alt' ></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-2">SEO</h5>
                                    <p class="card-text">Increasing the awareness of your brand and online presence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 mb-4 px-2 py-2 shadow-sm border-0 border-top border-primary border-2">
                                <div class="d-flex justify-content-center align-items-center services-icon">
                                    <i class='bx bxl-facebook' ></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-2">Social Media Marketing</h5>
                                    <p class="card-text">Utilizing different platforms to engage with your clients.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center"  data-aos="fade-up" data-aos-delay="400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur veritatis delectus architecto accusantium saepe laborum. Quasi, nihil accusamus veniam deserunt, temporibus suscipit voluptatem dicta harum aliquam nam commodi molestias reprehenderit nulla magni? Ut quod nisi, in facere, alias ad adipisci magnam doloremque earum aliquam similique? Vel eum fugiat error nam.
                </p>
            </div>
        </section>
        {{-- end works --}}

        {{-- Tools we use --}}
        <section id="technology" class="technology bg-s-light">
            <div class="text-center">
                <h5 class="section-title mb-3" data-aos="fade-up" data-aos-delay="100">Technology</h5>
                <h1 class="text-primary font-weight-bold sub-title mb-2" data-aos="fade-up" data-aos-delay="200">Technology We Use</h1>
                <div class="position-relative d-none d-lg-block technology-slide" data-aos="fade-up" data-aos-delay="300">

                    <div class="d-flex my-4 justify-content-center technology-slide-left">
                        <div class="d-flex justify-content-center">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/html.png')}}" alt="Html" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/css.png')}}" alt="css" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/scss.png')}}" alt="scss" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/js.png')}}" alt="javascript" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/php.png')}}" alt="php" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/wordpress.png')}}" alt="wordpress" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/git.png')}}" alt="git" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/github.png')}}" alt="github" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/csharp.png')}}" alt="csharp" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/bootstrap.png')}}" alt="bootstrap" class="img-fluid">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/html.png')}}" alt="Html" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/css.png')}}" alt="css" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/scss.png')}}" alt="scss" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/js.png')}}" alt="javascript" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/php.png')}}" alt="php" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/wordpress.png')}}" alt="wordpress" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/git.png')}}" alt="git" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/github.png')}}" alt="github" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/csharp.png')}}" alt="csharp" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/bootstrap.png')}}" alt="bootstrap" class="img-fluid">
                            </div>
                           
                        </div>
                    </div>

                    <div class="d-flex my-4 justify-content-center technology-slide-right">
                        <div class="d-flex justify-content-center">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/python.png')}}" alt="python" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/shopify.png')}}" alt="shopify" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/vue.png')}}" alt="vue" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/webflow.png')}}" alt="webflow" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/figma.png')}}" alt="figma" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/photoshop.png')}}" alt="photoshop" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/s3.png')}}" alt="s3" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/heroku.png')}}" alt="heroku" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/laravel.png')}}" alt="laravel" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/django.png')}}" alt="django" class="img-fluid">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/python.png')}}" alt="python" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/shopify.png')}}" alt="shopify" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/vue.png')}}" alt="vue" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/webflow.png')}}" alt="webflow" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/figma.png')}}" alt="figma" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/photoshop.png')}}" alt="photoshop" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/s3.png')}}" alt="s3" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/heroku.png')}}" alt="heroku" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/laravel.png')}}" alt="laravel" class="img-fluid">
                            </div>
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/django.png')}}" alt="django" class="img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-block d-lg-none">
                    <div class="row">
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/html.png')}}" alt="Html" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/css.png')}}" alt="css" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/bootstrap.png')}}" alt="bootstrap" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/js.png')}}" alt="js" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/csharp.png')}}" alt="csharp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/django.png')}}" alt="django" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/figma.png')}}" alt="figma" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/git.png')}}" alt="git" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/github.png')}}" alt="github" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/heroku.png')}}" alt="heroku" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/laravel.png')}}" alt="laravel" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/photoshop.png')}}" alt="photoshop" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/php.png')}}" alt="php" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/python.png')}}" alt="python" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/s3.png')}}" alt="s3" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/scss.png')}}" alt="scss" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/shopify.png')}}" alt="shopify" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/vue.png')}}" alt="vue" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/webflow.png')}}" alt="webflow" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="ts-img">
                                <img src="{{asset('codex-assets/technology/wordpress.png')}}" alt="wordpress" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Tools we use --}}

        {{-- works --}}
        <section id="works" class="works">
            <div class="container text-center">
                <h5 class="section-title text-center mb-3" data-aos="fade-up" data-aos-delay="100">Works</h5>
                <h1 class="text-primary font-weight-bold sub-title" data-aos="fade-up" data-aos-delay="200">Check Our Works</h1>
                <p data-aos="fade-up" data-aos-delay="300">We create and improve designs while adhering to the personality of your brand and your distinctive user profiles.</p>
                <p data-aos="fade-up" data-aos-delay="400">While aesthetics are subject to debates, data is not, so our definition of ‘effective’ web design is user-centric.</p>
                <div class="my-4">
                    <div class="work-container" data-aos="fade-up" data-aos-delay="500">
                        <div class="work-box mb-3">
                            <img src="{{asset('./codex-assets/works/10.jpg')}}" class="rounded mx-auto d-block w-100" alt="work 1.">
                            <div class="work-overlay text-center">
                                <div class="d-flex justify-content-between w-100 p-4 align-items-center">
                                    <a href="{{asset('./codex-assets/works/9.jpg')}}">
                                        <i class='bx bx-link'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box mb-3">
                            <img src="{{asset('./codex-assets/works/10.jpg')}}" class="rounded mx-auto d-block w-100" alt="work 1.">
                            <div class="work-overlay text-center">
                                <div class="d-flex justify-content-between w-100 p-4 align-items-center">
                                    <a href="{{asset('./codex-assets/works/9.jpg')}}">
                                        <i class='bx bx-link'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box mb-3">
                            <img src="{{asset('./codex-assets/works/2.jpg')}}" class="rounded mx-auto d-block w-100" alt="work 1.">
                            <div class="work-overlay text-center">
                                <div class="d-flex justify-content-between w-100 p-4 align-items-center">
                                    <a href="{{asset('./codex-assets/works/2.jpg')}}">
                                        <i class='bx bx-link'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box mb-3">
                            <img src="{{asset('./codex-assets/works/3.jpg')}}" class="rounded mx-auto d-block w-100" alt="work 1.">
                            <div class="work-overlay text-center">
                                <div class="d-flex justify-content-between w-100 p-4 align-items-center">
                                    <a href="{{asset('./codex-assets/works/3.jpg')}}">
                                        <i class='bx bx-link'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box mb-3">
                            <img src="{{asset('./codex-assets/works/4.jpg')}}" class="rounded mx-auto d-block w-100" alt="work 1.">
                            <div class="work-overlay text-center">
                                <div class="d-flex justify-content-between w-100 p-4 align-items-center">
                                    <a href="{{asset('./codex-assets/works/4.jpg')}}">
                                        <i class='bx bx-link'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box mb-3">
                            <img src="{{asset('./codex-assets/works/5.jpg')}}" class="rounded mx-auto d-block w-100" alt="work 1.">
                            <div class="work-overlay text-center">
                                <div class="d-flex justify-content-between w-100 p-4 align-items-center">
                                    <a href="{{asset('./codex-assets/works/5.jpg')}}">
                                        <i class='bx bx-link'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box mb-3">
                            <img src="{{asset('./codex-assets/works/6.jpg')}}" class="rounded mx-auto d-block w-100" alt="work 1.">
                            <div class="work-overlay text-center">
                                <div class="d-flex justify-content-between w-100 p-4 align-items-center">
                                    <a href="{{asset('./codex-assets/works/6.jpg')}}">
                                        <i class='bx bx-link'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box mb-3">
                            <img src="{{asset('./codex-assets/works/7.jpg')}}" class="rounded mx-auto d-block w-100" alt="work 1.">
                            <div class="work-overlay text-center">
                                <div class="d-flex justify-content-between w-100 p-4 align-items-center">
                                    <a href="{{asset('./codex-assets/works/7.jpg')}}">
                                        <i class='bx bx-link'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box mb-3">
                            <img src="{{asset('./codex-assets/works/8.jpg')}}" class="rounded mx-auto d-block w-100" alt="work 1.">
                            <div class="work-overlay text-center">
                                <div class="d-flex justify-content-between w-100 p-4 align-items-center">
                                    <a href="{{asset('./codex-assets/works/8.jpg')}}">
                                        <i class='bx bx-link'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box mb-3">
                            <img src="{{asset('./codex-assets/works/9.jpg')}}" class="rounded mx-auto d-block w-100" alt="work 1.">
                            <div class="work-overlay text-center">
                                <div class="d-flex justify-content-between w-100 p-4 align-items-center">
                                    <a href="{{asset('./codex-assets/works/9.jpg')}}">
                                        <i class='bx bx-link'></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        {{-- end works --}}

        {{-- fqa --}}
        <section id="fqa" class="fqa bg-s-light">
            <div class="container text-center">
                <h5 class="section-title mb-3" data-aos="fade-up" data-aos-delay="100">F.A.Q</h5>
                <h1 class="text-primary" data-aos="fade-up" data-aos-delay="200">Frequently Asked Questions</h1>
                <p data-aos="fade-up" data-aos-delay="300">Do you have a question in mind?</p>
                <div class="my-4 fqa-content" data-aos="fade-up" data-aos-delay="400">
                    <div class="accordion accordion-flush" id="fqa-accordion">

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1" aria-expanded="false" aria-controls="accordion1">
                                Who will be working on my website?
                            </button>
                          </h2>
                          <div id="accordion1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#fqa-accordion">
                            <div class="accordion-body">In addition to a high-end programmer, you will get a dedicated Project Manager, three designers who will provide original concept ideas for you based on your needs.</div>
                          </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion2" aria-expanded="false" aria-controls="accordion2">
                                Can I get support with anything else?
                              </button>
                            </h2>
                            <div id="accordion2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#fqa-accordion">
                              <div class="accordion-body">In order to maximize and reveal the full potential of your branding, we primarily provide free integrations of various technologies, systems, and algorithms accessible on the international market depending on the service you acquired.</div>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion3" aria-expanded="false" aria-controls="accordion3">
                                How much will it cost?
                              </button>
                            </h2>
                            <div id="accordion3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#fqa-accordion">
                              <div class="accordion-body">We have a wide variety of prices available from startup businesses up to big corporations. Click here to see more info.</div>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion4" aria-expanded="false" aria-controls="accordion4">
                                Will you use a template?
                              </button>
                            </h2>
                            <div id="accordion4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#fqa-accordion">
                              <div class="accordion-body">No. Every website that we create is unique. We cater to your users persona without losing the identity of the brand you are aiming to create.</div>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion" aria-expanded="false" aria-controls="accordion">
                                What do you need from me?
                              </button>
                            </h2>
                            <div id="accordion" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#fqa-accordion">
                              <div class="accordion-body">For us to handle your website, we will need your participation and trust. Creating a website takes a team effort, which is why we need you to assist us. The best website content is created when you employ your own personality to establish your own website.</div>
                            </div>
                          </div>

                    </div>
                </div>
            </div>
        </section>


        {{-- Testimonial --}}
        <section id="testimonial" class="testimonial">
            <div class="container text-center">
                <h5 class="section-title mb-3" data-aos="fade-up" data-aos-delay="100">Testimonial</h5>
                <h1 class="text-primary" data-aos="fade-up" data-aos-delay="200">What Pepole Says</h1>
                <div class="my-4">

                    <div class="swiper" data-aos="fade-up" data-aos-delay="300">
                        <div class="swiper-wrapper">
                            @if($testimonials->count() > 0)
                                @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="{{$testimonial->user->avatar_url}}" alt="testimonial1" class="w-100">
                                        <div class="card-body">
                                            <div class="starts">
                                                @for($i = 0; $i < $testimonial->star_count; $i++)
                                                <i class='bx bxs-star'></i>
                                                @endfor
                                            </div>
                                            <p class="font-weight-bold">{{$testimonial->user->name}}</p>
                                            <p>{{$testimonial->message}}!</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @else 
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="{{asset('./codex-assets/logo-header.png')}}" alt="testimonial1" class="w-100">
                                    <div class="card-body">
                                        <div class="starts">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="font-weight-bold">PowerCodex Inc</p>
                                        <p>No Testimonial yet. be the first shit</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    @guest
                    <form action="{{route('login.google')}}" method="GET"  data-aos="zoom-out" data-aos-delay="400">
                        <p class="mt-2">Login to add comment</p>
                        <button type="submit" class="btn btn-primary mt-1"><i class='bx bxl-google'></i></button>
                    </form>
                    @else
                        @if(!$userHasTestimonial)
                        <a class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#comment"  data-aos="zoom-out" data-aos-delay="500">Leave a Comment</a>
                        @endif
                    @endguest
                    

                    @auth
                    @if(route('submit.testimonial'))
                    <div class="modal fade" id="comment" aria-hidden="true" aria-labelledby="commentLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title" id="commentLabel">Rate our service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('submit.testimonial')}}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <textarea class="form-control" name="message" cols="30" rows="3" placeholder="Write something"></textarea>
                                    <div class="d-flex mt-2 start-rating">
                                        <input type="radio" name="star" value="5" class="mr-1 star1" id="for1">
                                        <label for="for1"></label>
                                        <input type="radio" name="star" value="4" class="mr-1 star2" id="for2">
                                        <label for="for2"></label>
                                        <input type="radio" name="star" value="3" class="mr-1 star3" id="for3">
                                        <label for="for3"></label>
                                        <input type="radio" name="star" value="2" class="mr-1 star4" id="for4">
                                        <label for="for4"></label>
                                        <input type="radio" name="star" value="1" class="mr-1 star5" id="for5">
                                        <label for="for5"></label>
                                    </div>
                                </div>
                                <div class="modal-footer border-0">
                                    <button type="submit" role="button" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    @endif
                    @endauth
                </div>
            </div>
        </section>

    </main>
@endsection

@section('script')
<script src="{{asset('js/swiper.js')}}" defer></script>
<script src="{{asset('js/lottie.js')}}" defer></script>
    <script type="module">
        const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        spaceBetween: 20,
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            480: {
                slidesPerView: 1,
                spaceBetween: 100
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            @php
                $testimonialCount = $testimonials->count();
                if($testimonialCount <= 1){
                    $tCount = 1;
                }else if($testimonialCount == 2){
                    $tCount = 2;
                }else{
                    $tCount = 3;
                }
            @endphp
            900: {
                slidesPerView: {{$tCount}},
                spaceBetween: 60
            }
            
        }
    });
    </script>
@endsection