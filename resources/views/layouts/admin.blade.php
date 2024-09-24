<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('./codex-assets/logo-footer.png')}}">
    <link rel="stylesheet" href="{{asset('css/boxicons.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/aos.css')}}"/>
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/admin.css') }}" rel="stylesheet">
</head>
<body @auth @if(Auth::user()->mode === 1) class="dark" @endif @endauth>
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
	<section id="sidebar">
		<a href="#" class="brand">
            <img src="{{asset('./codex-assets/logo-header.png')}}" alt="logo">
		</a>
		<ul class="side-menu top">
			<li class="@if(Route::currentRouteName() == 'dashboard') active @endif">
				<a href="{{route('dashboard')}}">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="@if(Route::currentRouteName() == 'analytics') active @endif">
				<a href="{{route('analytics')}}">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li class="@if(Route::currentRouteName() == 'inbox') active @endif">
				<a href="{{route('inbox')}}">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Inbox</span>
				</a>
			</li>
			<li class="@if(Route::currentRouteName() == 'quote.request') active @endif">
				<a href="{{route('quote.request')}}">
					<i class='bx bx-message-alt-detail' ></i>
					<span class="text">Quote Requested</span>
				</a>
			</li>
			<li class="@if(Route::currentRouteName() == 'team') active @endif">
				<a href="{{route('team')}}">
					<i class='bx bx-group'></i>
					<span class="text">Team</span>
				</a>
			</li>
			<li class="@if(Route::currentRouteName() == 'reviews') active @endif">
				<a href="{{route('reviews')}}">
					<i class='bx bxs-star'></i>
					<span class="text">Reviews</span>
				</a>
			</li>
		</ul>
	</section>

	<section id="content" class="h-100">
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">{{Auth::user()->name}}</a>
            <div class="spacer"></div>
			<input type="checkbox" class="d-none"  id="switch-mode" @if(Auth::user()->mode == 1) checked @endif>
			<label for="switch-mode" class="switch-mode" onclick="document.getElementById('switchMode').submit()"></label><i class='bx bx-moon icon-mode'></i>
			<form id="switchMode" action="{{route('switch.mode')}}" method="post">
				@csrf
				<input type="hidden" name="mode" value="{{Auth::user()->mode}}">
			</form>
			<a href="#" class="profile">
				<img src="{{Auth::user()->avatar_url}}" data-bs-toggle="modal" data-bs-target="#account">
			</a>
		</nav>

		<main class="h-100">
			<div class="head-title">
				<div class="left">
					<h3 class="text-capitalize">{{str_replace("."," ",Route::currentRouteName())}}</h3>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="{{route('dashboard')}}">Dashboard</a>
						</li>
						@for($i = 2; $i <= count(Request::segments()); $i++)
							<li><i class='bx bx-chevron-right'></i></li>
							<li>
								<a class="text-capitalize" href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
									{{str_replace("-"," ",Request::segment($i))}}
								</a>
							</li>
						@endfor
					</ul>
				</div>
			</div>
			@yield('content')
		</main>

    </section>
	
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/admin.js') }}" defer></script>
    {{-- <script src="{{asset('js/aos.js')}}" defer></script> --}}
    {{-- <script src="{{asset('js/swiper.js')}}" defer></script> --}}
    {{-- <script src="{{asset('js/lottie.js')}}" defer></script> --}}
	@include('sweetalert::alert')
    @yield('script')
</body>
</html>
