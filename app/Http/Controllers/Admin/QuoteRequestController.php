<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\QuoteRequestMail;
use App\Mail\QuoteRequestReplyMail;
use App\Models\Admin\QuoteRequestReply;
use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class QuoteRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }

    // quote request view 
    public function quoteRequested(){
        if(!empty($_GET['email']) && !empty($_GET['reference'])){
            // if session == csrftoken 
            QuoteRequest::where('model_email', $_GET['email'])->where('model_reference_id', $_GET['reference'])->update(['model_status' => 1]);
            $messages = QuoteRequest::where('model_email', $_GET['email'])->where('model_reference_id', $_GET['reference'])->firstOrFail();
            $reply = QuoteRequestReply::where('reference_id', $_GET['reference'])->get();
        }else{
            $messages = NULL;
            $reply = NULL;
        }
        $inbox = QuoteRequest::all();
        
        return view('admin.pages.quote-requested', compact(['inbox', 'messages', 'reply']));
    }

    public function codexRequestReplySend(Request $request){
        $request->validate([// validation roles
            'message' => 'required',
            'reference' => 'required',
            'email' => 'required|email:rfc,dns',
        ]);

        $quoteRequestDetails = array(
            'name' => Auth::user()->name,
            'ref_id' => $request->ref_id,
            'avatar_url' => Auth::user()->avatar_url,
            'receiver_email' => $request->email,
            'sender_email' => Auth::user()->email,
            'reference_id' => $request->reference,
            'message' => $request->message
        );

        if($this->isConnected()){ // check if connected to internet
            Mail::to($request->email)->send(new QuoteRequestReplyMail($quoteRequestDetails)); // email process
            if(Mail::failures()){ // check if email is fail
                return back()->with('toast_error', 'Something went wrong.');
            }else{
                QuoteRequestReply::create($quoteRequestDetails); // store contact data to database and redirect back to homepage
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
