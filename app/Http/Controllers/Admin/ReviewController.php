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

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }

    // Reviews view
    public function codexReviews(){
        $testimonial = CodexTestimonials::select('id', 'created_at')->whereYear("created_at", date('Y'))->get()->groupBy(function($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });

        $testimonialcount = [];
        $testimonialArr = [];

        foreach ($testimonial as $key => $value) {
            $testimonialcount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($testimonialcount[$i])){
                $testimonialArr[$i] = $testimonialcount[$i];    
            }else{
                $testimonialArr[$i] = 0;    
            }
        }
        $testimonials = CodexTestimonials::all();

        return view('admin.pages.reviews', compact(['testimonialArr', 'testimonials']));
    }

    // change reviews
    public function changeReviewStatus(Request $request){
        $reviewID = $request->review_id;
        $status = $request->review_status;
        $validator = Validator::make($request->all(), [
            'review_id' => 'required',
            'review_status' => 'required'
        ]);

        if ($validator->fails()) {
            $this->alert_msg('Something went wrong.', '<i class="bx bx-message-rounded-error"></i>');
            return back();
        }

        if($status == 'Publish' || $status == 'Draft'){
            $updateReview = CodexTestimonials::where('id', $reviewID)->update(['status' => $status]);
            if(!$updateReview){
                $this->alert_msg('Something went wrong.', '<i class="bx bx-message-rounded-error"></i>');
                return back();
            }
            $this->alert_msg('Status Updated.', '<i class="bx bx-check-double bx-tada"></i>');
            return back();
        }elseif($request->review_status == 'Delete'){
            $deleteReview = CodexTestimonials::where('id', $reviewID)->delete();
            if(!$deleteReview){
                $this->alert_msg('Something went wrong.', '<i class="bx bx-message-rounded-error"></i>');
                return back();
            }
            $this->alert_msg('Review deleted.', '<i class="bx bx-trash-alt bx-tada"></i>');
            return back();
        }else{
            $this->alert_msg('Ops looks like your in trouble.', '<i class="bx bx-info-circle bx-tada"></i>');
            return back();
        }
    }

    public function alert_msg($msg, $icon){
        return alert()->success($msg)->toToast()->position('bottom-end')->iconHtml($icon)->padding('7px')->autoClose(6000)->hideCloseButton();
    }
}
