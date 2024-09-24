<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ==========================================================================================================================================================================
// ################################################################ AUTHENTICATIONS #########################################################################################
// ==========================================================================================================================================================================
Auth::routes();
Route::match(['get', 'post'], 'register', function(){ return redirect('/'); });
Route::match(['get'], 'login', function(){ return redirect('/'); });
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.admin');

// ==========================================================================================================================================================================
// ######################################################################### GUEST ##########################################################################################
// ==========================================================================================================================================================================
Route::get('/', [App\Http\Controllers\LayoutsController::class, 'index'])->name('home');
// @pages
Route::get('/about', [App\Http\Controllers\LayoutsController::class, 'about'])->name('about');
//@priging ==================
Route::get('/pricing', [App\Http\Controllers\LayoutsController::class, 'pricing'])->name('pricing');
Route::get('/pricing/e-commerce', [App\Http\Controllers\LayoutsController::class, 'ecommerce'])->name('pricing.ecommerce');
Route::get('/pricing/web-design', [App\Http\Controllers\LayoutsController::class, 'webdesign'])->name('pricing.webdesign');
Route::get('/pricing/seo', [App\Http\Controllers\LayoutsController::class, 'seo'])->name('pricing.seo');
Route::get('/pricing/social-media-marketing', [App\Http\Controllers\LayoutsController::class, 'smm'])->name('pricing.smm');

// ===================
Route::get('/services', [App\Http\Controllers\LayoutsController::class, 'services'])->name('services');
Route::get('/works', [App\Http\Controllers\LayoutsController::class, 'works'])->name('works');
Route::get('/contact', [App\Http\Controllers\LayoutsController::class, 'contact'])->name('contact');
Route::get('/get-a-quote', [App\Http\Controllers\LayoutsController::class, 'getAQuote'])->name('get.quote');

Route::group(['middleware' => ['guest']], function () {
    Route::get('auth/google', [App\Http\Controllers\Authentication::class, 'redirectToGoogle'])->name('login.google'); // google auth
    Route::get('login/google/callback', [App\Http\Controllers\Authentication::class, 'handleGoogleCallback']); // google callback route
});

Route::post('/submit-contact', [App\Http\Controllers\LayoutsController::class, 'submitContact'])->name('submit.contact'); // submit contact
Route::post('/submit-quote-request', [App\Http\Controllers\LayoutsController::class, 'submitQuoteRequest'])->name('submit.quote.request'); // submit quote request

Route::middleware(['auth', 'is_user'])->group(function(){
    Route::post('/submit-testimonial', [App\Http\Controllers\User\UserController::class, 'addTestimonials'])->name('submit.testimonial'); // store testimonial
});


// ==========================================================================================================================================================================
// ######################################################################### ADMIN ##########################################################################################
// ==========================================================================================================================================================================
// @admin login route
Route::get('codex-administrator', function(){
    return view('admin.login-admin');
})->name('admin.login'); // admin login
// login 

// @admin routes
Route::middleware(['auth', 'is_admin'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard'); // dashboard
    Route::post('/switch-mode', [App\Http\Controllers\Admin\DashboardController::class, 'switchMode'])->name('switch.mode'); // sweitch mode
    Route::get('/dashboard/analytics', [App\Http\Controllers\Admin\AnalyticsController::class, 'codexAnalytics'])->name('analytics'); // analytics page
    Route::get('/dashboard/inbox', [App\Http\Controllers\Admin\InboxController::class, 'codexInbox'])->name('inbox'); // inbox page
    Route::get('/dashboard/quote-requested', [App\Http\Controllers\Admin\QuoteRequestController::class, 'quoteRequested'])->name('quote.request'); // inbox page
    Route::get('/dashboard/team', [App\Http\Controllers\Admin\TeamController::class, 'codexTeam'])->name('team'); // team page
    Route::get('/dashboard/reviews', [App\Http\Controllers\Admin\ReviewController::class, 'codexReviews'])->name('reviews'); // reviews page

    //actions 
    Route::post('/change-review', [App\Http\Controllers\Admin\ReviewController::class, 'changeReviewStatus'])->name('change.reviews.status'); //change reviews
    Route::post('/inbox-send', [App\Http\Controllers\Admin\InboxController::class, 'codexInboxSend'])->name('inbox.send'); // reply contact
    Route::post('/request-reply-send', [App\Http\Controllers\Admin\QuoteRequestController::class, 'codexRequestReplySend'])->name('request.reply.send'); // reply quote request
    Route::get('/dashboard/team/edit', [App\Http\Controllers\Admin\TeamController::class, 'editTeamMethod'])->name('edit.team'); //edit team
    Route::post('/dashboard/team/update', [App\Http\Controllers\Admin\TeamController::class, 'updateTeamMethod'])->name('update.team'); //update team
});