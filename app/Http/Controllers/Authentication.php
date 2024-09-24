<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
Use Alert;

class Authentication extends Controller
{
    // Google login
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    // Google callback
    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        if(Auth::user()->role == 1){
            $this->alert_msg('Welcome ' . Auth::user()->name, '<i class="bx bxs-user-pin bx-tada"></i>', 'ok');
            return redirect()->route('dashboard');
        }elseif(Auth::user()->role == 0){
            $this->alert_msg('You are now login as ' . Auth::user()->name, '<i class="bx bxs-user-pin bx-tada"></i>', 'ok');
            return redirect()->route('home');
        }
    }

    // create user or login 
    protected function _registerOrLoginUser($data){
        $user = User::where('email', '=', $data->email)->first();
        if($data->email === 'a.adriansalguet3.code@gmail.com'){
            $role = 1;
            $position = 'Developer';
        }elseif($data->email === 'test.test@gmail.com'){
            $role = 1;
            $position = 'Project Manager';
        }else{
            $role = 0;
            $position = 'Customer';
        }
        if(!$user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar_url = $data->avatar;
            $user->role = $role;
            $user->position = $position;
            $user->save();
        }
        Auth::login($user);
    }

    public function alert_msg($msg, $icon, $status){
        if($status == 'ok'){
            return alert()->success($msg)->toToast()->position('bottom-end')->iconHtml($icon)->padding('7px')->autoClose(15000)->hideCloseButton();
        }else{
            return alert()->error($msg)->toToast()->position('bottom-end')->iconHtml($icon)->padding('7px')->autoClose(15000)->hideCloseButton();
        }
        
    }
}
