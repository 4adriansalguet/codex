<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CodexTestimonials;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }

    // team 
    public function codexTeam(){
        $teams = User::where('role', 1)->where('position', '!=', 'Customer')->get();

        return view('admin.pages.team',compact(['teams']));
    }

    public function editTeamMethod(){
        $name = $_GET['name'];
        $provider_id = $_GET['provider_id'];
        $team = User::where('name', $name)->where('provider_id', $provider_id)->firstOrFail();
        return view('admin.pages.edit-team',compact(['team']));
    }

    public function updateTeamMethod(Request $request){
        $name = $request->name;
        $provider_id = $request->provider_id;
        if(!empty($request->firstname) && !empty($request->lastname)){
            $user_name = $request->firstname .' '. $request->lastname;
        }else{
            $user_name = $name;
        }

        $user_info = User::where('name', $name)->where('provider_id', $provider_id)->firstOrFail();
        

        $allow_input = array(
            'Administrator','User','Developer','Designer','Project Manager', 'Content Writer'
        );

        if(in_array($request->position, $allow_input) && in_array($request->role, $allow_input)){
            if(!empty($request->password) && !empty($request->password_confirm)){

                $request->validate([ 
                    'password'         => 'required|string|min:8',
                    'password_confirm' => 'required|same:password'  
                ]);

                if($request->password == $request->password_confirm){
                    $password = Hash::make($request->password);
                }
            }else{
                $password = $user_info->password;
            }

            $role = $request->role == 'Administrator'? 1 : 0;

            $update = User::where('name', $name)->where('provider_id', $provider_id)->update([
                'name'=> $user_name, 
                'position' => $request->position, 
                'role' => $role, 
                'password' => $password
            ]);
            if($update){
                alert()->success('<small>'.$user_name.' Updated Successfuly!</small>')->toToast()->position('bottom-end')->iconHtml('<i class="bx bx-user-check"></i>')->padding('7px')->autoClose(6000)->hideCloseButton();
                return redirect(route('team'));
            }
            return redirect(route('team'))->with('fail', 'Something completely went wrong.');
        }
    }
}
