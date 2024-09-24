<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\CodexTestimonials;
use Illuminate\Support\Facades\Auth;
Use Alert;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }

    // dashboard View
    public function dashboard(){
        $users = User::where('role', 0)->get();
        return view('admin.index', compact(['users']));
    }

    // switch mode
    public function switchMode(Request $request){
        $validator = Validator::make($request->all(), [
            'mode' => 'required|boolean',
        ]);
        if ($validator->fails()) {
            alert()->success('Ops something went wrong')->toToast()->position('bottom-end')->iconHtml('<i class="bx bx-message-rounded-error bx-flashing"></i>')->padding('7px')->autoClose(15000)->hideCloseButton();
            return back();
        }
        if($request->mode == 1){
            $mode = 0;
            $icon = '<i class="bx bx-sun bx-xs bx-spin"></i>';
            $msg = '<small>Light Mode Activated</small>';
        }else{
            $mode = 1;
            $icon = '<i class="bx bx-moon bx-xs bx-flashing"></i>';
            $msg = '<small>Dark Mode Activated</small>';
        }
        $updateMode = User::where('id', Auth::id())->update(['mode'=>$mode]);
        if($updateMode){
            alert()->success($msg)->toToast()->position('bottom-end')->iconHtml($icon)->padding('7px')->autoClose(6000)->hideCloseButton();
            return back(); 
        }
    }
}
