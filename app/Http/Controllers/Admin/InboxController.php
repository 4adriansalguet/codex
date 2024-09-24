<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\InboxReply as MailInboxReply;
use App\Models\Admin\InboxReply;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class InboxController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }

    // inbox view
    public function codexInbox(){
        if(!empty($_GET['email']) && !empty($_GET['reference'])){
            ContactUs::where('email', $_GET['email'])->where('reference_id', $_GET['reference'])->update(['status' => 1]);
            $messages = ContactUs::where('email', $_GET['email'])->where('reference_id', $_GET['reference'])->firstOrFail();
            $reply = InboxReply::where('reference_id', $_GET['reference'])->get();
        }else{
            $messages = NULL;
            $reply = NULL;
        }
        $inbox = ContactUs::all();
        
        return view('admin.pages.inbox', compact(['inbox', 'messages', 'reply']));
    }

    public function codexInboxSend(Request $request){
        $request->validate([// validation roles
            'message' => 'required',
            'reference' => 'required',
            'email' => 'required|email:rfc,dns',
        ]);

        $contactDetails = array(
            'name' => Auth::user()->name,
            'ref_id' => $request->ref_id,
            'avatar_url' => Auth::user()->avatar_url,
            'receiver_email' => $request->email,
            'sender_email' => Auth::user()->email,
            'reference_id' => $request->reference,
            'message' => $request->message
        );

        if($this->isConnected()){ // check if connected to internet
            Mail::to($request->email)->send(new MailInboxReply($contactDetails)); // email process
            if(Mail::failures()){ // check if email is fail
                return back()->with('toast_error', 'Something went wrong.');
            }else{
                InboxReply::create($contactDetails); // store contact data to database and redirect back to homepage
                return back();
            }
        }else{
            return back()->with('toast_error', 'Something with your internet. Please check your connection.');
        }
        return back()->with('toast_error', 'Something went wrong, please try again later');
    }

    // check connection 
    public function isConnected($site = "https://youtube.com/"){
        if(@fopen($site, "r")){
            return true;
        }else{
            return false;
        }
    }
}
