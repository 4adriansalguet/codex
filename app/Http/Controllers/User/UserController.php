<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Models\CodexTestimonials;
use App\Models\User;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'is_user']);
    }

    // create new testimonial
    public function addTestimonials(Request $request){
        $validator = Validator::make($request->all(), [
            'message' => 'required',
            'star' => 'required'
        ]);
        if ($validator->fails()) {
            alert()->error('Please don\'t leave all fields empty.')->hideCloseButton();
            return redirect('/#testimonial');
        }
        $createTestimonial = CodexTestimonials::create([
            'user_id' => Auth::id(),
            'message' => $request->message,
            'star_count' => $request->star
        ]);
        if($createTestimonial){
            alert()->success('Thank you '.Auth::user()->name.' for reviewing our services.')->hideCloseButton();
            return redirect('/#testimonial');
        }
    }

    
}
