@extends('layouts.app')

@section('title', 'Works')

@section('content')
    <div class="pages">

        <div class="hero-pages">
            <div class="d-flex align-items-center justify-content-center flex-column sub-hero" data-aos="fade-up" data-aos-delay="200">
                <h1 class="display-3" data-aos="zoom-out">Our Works</h1>
            </div>
        </div>

        <section class="works-section-1 section-overlap-top">
            <div class="container">
                <div class="card border-0 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 text-center">
                                <img src="{{asset('./codex-assets/works/works.jpg')}}" class="img-fluid rounded-2" alt="works">
                            </div>
                            <div class="col-lg-6 d-flex flex-column justify-content-center">
                                <div class="row h-100 g-4">
                                    <div class="col-6 col-lg-6">
                                        <div class="card border-0 h-100">
                                            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                                <img src="{{asset('./codex-assets/works/web-design.png')}}" alt="Web Design">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <div class="card border-0 h-100">
                                            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                                <img src="{{asset('./codex-assets/works/logo-design.png')}}" alt="Logo Design">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <div class="card border-0 h-100">
                                            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                                <img src="{{asset('./codex-assets/works/smm-design.png')}}" alt="SMM Design">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <div class="card border-0 h-100">
                                            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                                <img src="{{asset('./codex-assets/works/landing.png')}}" alt="Landing page Design">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="works-section-2">
            <div class="container">
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
            </div>
        </section>
    </div>
@endsection