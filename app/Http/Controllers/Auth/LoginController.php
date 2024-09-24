<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function authenticated()
    {
        if(Auth::user()->role == 1){
            $this->alert_msg('Welcome ' . Auth::user()->name, '<i class="bx bxs-user-pin bx-tada"></i>', 'ok');
            return redirect()->route('dashboard');
        }elseif(Auth::user()->role == 0){
            $this->alert_msg('You are now login as ' . Auth::user()->name, '<i class="bx bxs-user-pin bx-tada"></i>', 'ok');
            return redirect()->route('home');
        }
    }
    
    public function alert_msg($msg, $icon, $status){
        if($status == 'ok'){
            return alert()->success($msg)->toToast()->position('bottom-end')->iconHtml($icon)->padding('7px')->autoClose(15000)->hideCloseButton();
        }else{
            return alert()->error($msg)->toToast()->position('bottom-end')->iconHtml($icon)->padding('7px')->autoClose(15000)->hideCloseButton();
        }
        
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
