<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('./codex-assets/shorticon.png')}}">
    <link rel="stylesheet" href="{{asset('css/boxicons.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/aos.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dev.css') }}" rel="stylesheet">
</head>
<body>
    @auth 
    <div class="modal fade" id="account" aria-hidden="true" aria-labelledby="accountLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="card pb-4">
                    <img class="img-fluid ml-3" src="{{ Auth::user()->avatar_url }}" alt="avatar">
                    <p class="pt-4">{{Auth::user()->name}}</p>
                    <p class="pt-1">{{Auth::user()->email}}</p>
                    <a class="btn btn-primary mt-2" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endauth
    <header id="header" class="fixed-top">
        <nav id="navbar" class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="w-25 img-fluid" src="{{asset('./codex-assets/logo-header.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navigation">
    
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item" data-aos="zoom-out-down">
                            <a class="nav-link scrollto" href="{{route('home')}}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item" data-aos="zoom-out-down">
                            <a class="nav-link scrollto @if(Route::currentRouteName() == 'about') nav-active @endif" href="{{route('about')}}">{{ __('About') }}</a>
                        </li>
                        <li class="nav-item dropdown" data-aos="zoom-out-down">
                            <a class="nav-link dropdown-toggle" href="#" id="pricingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pricing
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="pricingDropdown">
                              <li><a class="dropdown-item" href="{{route('pricing.webdesign')}}">Web Design</a></li>
                              <li><a class="dropdown-item" href="{{route('pricing.ecommerce')}}">E - Commerce</a></li>
                              <li><a class="dropdown-item" href="{{route('pricing.seo')}}">SEO</a></li>
                              <li><a class="dropdown-item" href="{{route('pricing.smm')}}">SMM</a></li>
                            </ul>
                          </li>
                        <li class="nav-item" data-aos="zoom-out-down">
                            <a class="nav-link scrollto @if(Route::currentRouteName() == 'services') nav-active @endif" href="{{route('services')}}">{{ __('Services') }}</a>
                        </li>
                        <li class="nav-item" data-aos="zoom-out-down">
                            <a class="nav-link scrollto @if(Route::currentRouteName() == 'works') nav-active @endif" href="{{route('works')}}">{{ __('Works') }}</a>
                        </li>
                        <li class="nav-item" data-aos="zoom-out-down">
                            <a class="nav-link scrollto @if(Route::currentRouteName() == 'contact') nav-active @endif" href="{{route('contact')}}">{{ __('Contact') }}</a>
                        </li>
                        @guest

                        @else
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
    
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                            <li class="nav-item avatar">
                                <img class="img-fluid ml-3" src="{{ Auth::user()->avatar_url }}" alt="avatar" data-bs-toggle="modal" data-bs-target="#account">
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    @if(Route::currentRouteName() != 'admin.login' && Route::currentRouteName() != 'get.quote')
    {{-- Contact Us --}}
    <section id="contact" class="contact">
        <div class="container text-center">
            <h5 class="section-title mb-3" data-aos="zoom-out" data-aos-delay="100">Contact</h5>
            <h1 class="text-primary" data-aos="zoom-out" data-aos-delay="200">Connect with us</h1>
            <div class="my-4">
                <div class="row gy-4">
                    <div class="col-lg-6 left">
                        <div class="row gy-4">
                            <div class="col-lg-6 col-sm-6">
                                <div class="card border-0 bg-light h-100" data-aos="zoom-out" data-aos-delay="100">
                                    <div class="card-body">
                                        <i class='bx bx-time-five bx-md'></i>
                                        <h5 class="mb-2">Office Hour</h5>
                                        <p>8 am - 5 pm CDT</p>
                                        <p>Monday to Friday</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card border-0 bg-light h-100" data-aos="zoom-out" data-aos-delay="100">
                                    <div class="card-body">
                                        <i class='bx bxs-phone bx-md'></i>
                                        <h5 class="mb-2">Call us</h5>
                                        <p>09123123123</p>
                                        <p>09123a9876623</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card border-0 bg-light h-100" data-aos="zoom-out" data-aos-delay="100">
                                    <div class="card-body">
                                        <i class='bx bx-current-location bx-md'></i>
                                        <h5 class="mb-2">Address</h5>
                                        <p>Secret chu-chu</p>
                                        <p>Isla Noa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card border-0 bg-light h-100" data-aos="zoom-out" data-aos-delay="100">
                                    <div class="card-body">
                                        <i class='bx bx-envelope bx-md'></i>
                                        <h5 class="mb-2">Email Us</h5>
                                        <p>info@webguru.com</p>
                                        <p>no-replyo@webguru.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 right">
                        <div class="card border-0 bg-light h-100" data-aos="zoom-out" data-aos-delay="100">
                            <div class="card-body">
                                <form action="{{route('submit.contact')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="slug" value="{{URL::current()}}">
                                    <div class="row gy-4">
                                        <div class="col-md-6 text-start">
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Your Name">
                                            @error('name')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="col-md-6 text-start">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone Number">
                                            @error('phone')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="col-md-12 text-start">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Your Email">
                                            @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="col-md-12 text-start">
                                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="6" value="{{old('message')}}" placeholder="Message">{{old('message')}}</textarea>
                                            @error('message')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <input type="submit" class="btn btn-primary" onClick="this.form.submit(); this.disabled=true; this.value='Processing..';" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endif

    <footer>
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-6 footer-content mb-4">
                        <h5 class="mb-4">Services</h5>
                        {{-- <img class="w-75 mb-3" src="{{asset('./codex-assets/logo-footer.png')}}" alt="footer logo"> --}}
                        <p class="mb-1">Web Developmen</p>
                        <p class="mb-1">Web Design</p>
                        <p class="mb-1">Logo Design</p>
                        <p class="mb-1">SEO Integration</p>
                        <p>Social Media Marketing</p>
                    </div>
                    <div class="col-lg-2 col-sm-6 footer-link mb-4">
                        <h5 class="mb-4">Website Links</h5>
                        <div class="d-flex flex-column">
                            <a href="#" class="mb-1">Home</a>
                            <a href="#about" class="mb-1">About</a>
                            <a href="#pricing" class="mb-1">Pricing</a>
                            <a href="#services" class="mb-1">Services</a>
                            <a href="#works">Works</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-contact mb-4">
                        <h5 class="mb-4">Contact Us</h5>
                        <p class="mb-1">info@webguru.com</p>
                        <p class="mb-1">no-replyo@webguru.com</p>
                        <p class="mb-1">0912-3123-123</p>
                        <div class="d-flex social-media">
                            <a href=""><i class='bx bxl-facebook-circle bx-md'></i></a>
                            <a href=""><i class='bx bxl-instagram-alt bx-md'></i></a>
                            <a href=""><i class='bx bxl-instagram-alt bx-md'></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6 footer-newsletter">
                        <h5 class="mb-4">Join Our NewsLetter</h5>
                        <p class="mb-1">Look no further than WEB GURU if you're seeking for a web development company that can offer top-notch services.
                            Become a member of our newsletter today to stay informed about our company's newest events and deals!
                            </p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Your Email Address" aria-label="Your Email Address" aria-describedby="button-addon2">
                            <button class="btn btn-footer" type="button" id="button-addon2">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container text-center">
                <p>© Copyright Webguru. All Rights Reserved</p>
                <a href="">Privacy Policy</a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/aos.js')}}" defer></script>
    @include('sweetalert::alert')
    @yield('script')
    <script type="module">
      AOS.init({
        duration: 1200,
        once: true
      })
    </script>
</body>
</html>
