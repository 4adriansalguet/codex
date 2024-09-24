@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="pages">
        <div class="hero-pages">
            <div class="d-flex align-items-center justify-content-center flex-column sub-hero" data-aos="fade-up" data-aos-delay="100">
                <h1 class="display-3 fw-bold" data-aos="zoom-out">WHO ARE WE</h1>
                <p data-aos="fade-up" data-aos-delay="200">In a third-world country, many people have fewer opportunities to get a well-paying job.</p>
                <p  data-aos="fade-up" data-aos-delay="300">With that said, many Filipinos naturally developed creativity for them to strive and reach the life they dreamed of. </p>
            </div>
        </div>
    
        <section class="about-section-1 section-overlap-top">
            <div class="container">
                <div class="card border-0" data-aos="fade-up" data-aos-delay="500">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 text-center d-flex justify-content-center">
                                <img src="{{asset('./codex-assets/about/about.jpg')}}" class="img-fluid rounded-2" alt="about us">
                            </div>
                            <div class="col-lg-6 d-flex flex-column justify-content-center my-2">
                                <h2 class="font-weight-bold">Create with the heart, build with the mind.</h2>
                                <p>Being one of the few people to have the opportunity to learn more, travel the world, appreciate different diversities, and develop a wider understanding of life at a very young age, I'd like to share that with people I cared for, to my country, and to less fortunate. </p>
                                <div class="list p-3">
                                    <ul>
                                        <li>
                                            <h6 class="my-1">Now Our Vision</h6>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class='bx bx-check'></i>
                                            <p>Start an Era of innovation to revolutionize development in every sector.</p>
                                        </li>
                                        <li>
                                            <h6 class="my-1">and Out Mission</h6>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class='bx bx-check'></i>
                                            <p>To nurture the creativity within each one in pursuit of one's dream.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-1 p-3">
                                    <a href="#" class="btn btn-outline-primary btn-lg">Schedule a consultation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="about-section-2">
            <div class="container my-4">
                <h4 class="text-uppercase my-4 text-primary" data-aos="fade-up">We stand by our CORE values which are</h4>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="card border-0 shadow-sm mb-4" data-aos="zoom-out">
                            <div class="card-body" data-aos="fade-left">
                                <i class='bx bx-shape-circle bx-spin bx-rotate-90 bx-lg'></i>
                                <h6 class="mt-3">Innovation</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="card border-0 shadow-sm mb-4" data-aos="zoom-out">
                            <div class="card-body" data-aos="fade-left">
                                <i class='bx bxs-analyse bx-spin bx-rotate-90 bx-lg'></i>
                                <h6 class="mt-3">Creativity</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="card border-0 shadow-sm mb-4" data-aos="zoom-out">
                            <div class="card-body" data-aos="fade-left">
                                <i class='bx bx-doughnut-chart bx-spin bx-rotate-90 bx-lg'></i>
                                <h6 class="mt-3">Passion</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="card border-0 shadow-sm mb-4" data-aos="zoom-out">
                            <div class="card-body" data-aos="fade-left">
                                <i class='bx bx-sun bx-spin bx-rotate-90 bx-lg'></i>
                                <h6 class="mt-3">Humility</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <p data-aos="zoom-out">Working with an amazing group of people brings fresh ideas and concepts that turn into reality. WEB GURU was created to help give them a chance to build their dream. WEB GURU is paving the path to being one of the leading web development companies in several different countries. We have been in service for half a decade. Aiming for the top is our goal and bringing in more visionaries that carry our core values with us. Through many great ideas and innovations. WEB GURU is working with our local government to help people be ready for innovations through expos, seminars, and events. By having an Agile Scrum Methodology, WEB GURU seeks continuous improvement we can offer our clients in a timely manner. Keeping fresh connections with our partners helps us grow and meet customer satisfaction. WEB GURU maintains the minimal cost for our services to dramatically increase the Return of Investment for our clientele.</p>
            </div>
        </section>

    </div>
@endsection