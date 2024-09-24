<?php

namespace App\Http\Controllers;

use App\Models\CodexTestimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use App\Mail\ContactUsMail;
use App\Mail\QuoteRequestMail;
use App\Models\ContactUs;
use App\Models\QuoteRequest;
use Illuminate\Support\Facades\Mail;

class LayoutsController extends Controller
{

    public function alert_msg($msg, $icon, $status){
        if($status == 'ok'){
            return alert()->success($msg)->toToast()->position('bottom-end')->iconHtml($icon)->padding('7px')->autoClose(15000)->hideCloseButton();
        }else{
            return alert()->error($msg)->toToast()->position('bottom-end')->iconHtml($icon)->padding('7px')->autoClose(15000)->hideCloseButton();
        }
        
    }
    
    public function index(){
        $testimonials = CodexTestimonials::where('status', 'Publish')->get();
        $userHasTestimonial = CodexTestimonials::where('user_id', Auth::id())->exists();
        return view('users.index', compact(['testimonials', 'userHasTestimonial']));
    }

    // Contact us 
    public function submitContact(Request $request){
        $validator = Validator::make($request->all(), [ // validation roles
            'name' => 'required',
            'phone' => ['required','regex:/(\+|00)(297|93|244|1264|358|355|376|971|54|374|1684|1268|61|43|994|257|32|229|226|880|359|973|1242|387|590|375|501|1441|591|55|1246|673|975|267|236|1|61|41|56|86|225|237|243|242|682|57|269|238|506|53|5999|61|1345|357|420|49|253|1767|45|1809|1829|1849|213|593|20|291|212|34|372|251|358|679|500|33|298|691|241|44|995|44|233|350|224|590|220|245|240|30|1473|299|502|594|1671|592|852|504|385|509|36|62|44|91|246|353|98|964|354|972|39|1876|44|962|81|76|77|254|996|855|686|1869|82|383|965|856|961|231|218|1758|423|94|266|370|352|371|853|590|212|377|373|261|960|52|692|389|223|356|95|382|976|1670|258|222|1664|596|230|265|60|262|264|687|227|672|234|505|683|31|47|977|674|64|968|92|507|64|51|63|680|675|48|1787|1939|850|351|595|970|689|974|262|40|7|250|966|249|221|65|500|4779|677|232|503|378|252|508|381|211|239|597|421|386|46|268|1721|248|963|1649|235|228|66|992|690|993|670|676|1868|216|90|688|886|255|256|380|598|1|998|3906698|379|1784|58|1284|1340|84|678|681|685|967|27|260|263)(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|2[70]|7|1)\d{4,20}$/'],
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        if ($validator->fails()) { // check if fields are valid
            return redirect($request->slug . '#contact')->withErrors($validator);
        }
        $contactDetails = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'email_created' => date("l jS \of F Y h:i A"),
            'reference_id' => bin2hex(openssl_random_pseudo_bytes(32))
        ); // contact request data to sent via email

        if($this->isConnected()){ // check if connected to internet
            Mail::to('admin@wguru.website')->send(new ContactUsMail($contactDetails)); // email process
            if(Mail::failures()){ // check if email is fail
                $this->alert_msg('Something went wrong, please try again later.', '<i class="bx bx-info-circle bx-flashing"></i>', 'fail');
                return back();
            }else{
                date_default_timezone_set('Asia/Manila');
                ContactUs::create($contactDetails); // store contact data to database and redirect back to homepage
                $this->alert_msg('Thank you '.(Auth::check() ?  Auth::user()->name :  '') .' for contacting us.', '<i class="bx bx-mail-send bx-flashing"></i>', 'ok');
                return redirect($request->slug . '#contact');
            }
        }else{
            $this->alert_msg('Something with your internet. Please check your connection.', '<i class="bx bx-wifi-off bx-flashing"></i>', 'fail');
            return back();
        }
        $this->alert_msg('An error occurred Please try again later.', '<i class="bx bxs-info-circle bx-flashing"></i>', 'fail');
        return back();
    }

    // SUBMIT QUOTE REQUEST
    public function submitQuoteRequest(Request $request){

        $request->validate([ 
            'firstname' => 'required', 
            'lastname' => 'required', 
            'email' => 'required|email',
            'phone' => ['required','regex:/(\+|00)(297|93|244|1264|358|355|376|971|54|374|1684|1268|61|43|994|257|32|229|226|880|359|973|1242|387|590|375|501|1441|591|55|1246|673|975|267|236|1|61|41|56|86|225|237|243|242|682|57|269|238|506|53|5999|61|1345|357|420|49|253|1767|45|1809|1829|1849|213|593|20|291|212|34|372|251|358|679|500|33|298|691|241|44|995|44|233|350|224|590|220|245|240|30|1473|299|502|594|1671|592|852|504|385|509|36|62|44|91|246|353|98|964|354|972|39|1876|44|962|81|76|77|254|996|855|686|1869|82|383|965|856|961|231|218|1758|423|94|266|370|352|371|853|590|212|377|373|261|960|52|692|389|223|356|95|382|976|1670|258|222|1664|596|230|265|60|262|264|687|227|672|234|505|683|31|47|977|674|64|968|92|507|64|51|63|680|675|48|1787|1939|850|351|595|970|689|974|262|40|7|250|966|249|221|65|500|4779|677|232|503|378|252|508|381|211|239|597|421|386|46|268|1721|248|963|1649|235|228|66|992|690|993|670|676|1868|216|90|688|886|255|256|380|598|1|998|3906698|379|1784|58|1284|1340|84|678|681|685|967|27|260|263)(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|2[70]|7|1)\d{4,20}$/'],
            'country' => 'required',
            'projectType' => 'required',
            'attachment' => 'max:10000|mimes:jpg,jpeg,png,pdf',
            'message' => 'required',
            'price_img_url' => 'url',
            'price' => 'min:2|max:12',
            'pricing_name' => 'string|max:12']
        );

        // allow input hidden field
        $allow_input = array(
            'Professional','Royalty','Starting','SMM','Basic Search Engine Optimization','Advance Search Engine Optimization', 
            '$249','$499','$899','$999','$1,499','$2,999','$500',URL::to('/codex-assets/pricing/price1.png'),URL::to('/codex-assets/pricing/price2.png'),URL::to('/codex-assets/pricing/price3.png')
        );

        // delete all file not exist on database
        $like = scandir('attachment/quote_request');
        foreach ($like as $thisFile) {
            $rs = QuoteRequest::where('model_attachment_name', $thisFile)->first();
            if (!$rs) {
                if($thisFile != "." and $thisFile != ".."){
                        unlink ('attachment/quote_request/' . $thisFile);
                }
            }
        }

        if(empty($request->price_img_url) && empty($request->pricing_name) && empty($request->price)){
            if(!empty($request->attachment)){
                $attachmentName = uniqid() . '.' . $request->attachment->extension();
            }else{
                $attachmentName = NULL;
            }
            # DATA TO STORE AND EMAIL DATA
            $quoteRequestData = array(
                'model_firstname' => $request->firstname,
                'model_lastname' => $request->lastname,
                'model_email' => $request->email,
                'model_phone' => $request->phone,
                'model_country' => $request->country,
                'model_projectType' => $request->projectType,
                'model_attachment_name' => $attachmentName,
                'model_attachment' => $request->attachment,
                'model_message' => $request->message,
                'model_price_img_url' => $request->price_img_url,
                'model_price' => $request->price,
                'model_pricing_name' => $request->pricing_name,
                'model_email_created' => date("l jS \of F Y h:i A"),
                'model_reference_id' => bin2hex(openssl_random_pseudo_bytes(32))
            ); 
    
            if($this->isConnected()){ // check if connected to internet
                Mail::to('admin@wguru.website')->send(new QuoteRequestMail($quoteRequestData)); // email process
                if(Mail::failures()){ // check if email is failp
                    $this->alert_msg('An error occurred Please try again later.', '<i class="bx bxs-info-circle bx-flashing"></i>', 'fail');
                    return back();
                }else{
                    if(!empty($request->attachment)){
                        $request->attachment->move(public_path('attachment/quote_request'), $attachmentName);
                    }
                    QuoteRequest::create($quoteRequestData); // store contact data to database and redirect back to homepage
                    $this->alert_msg('Our Team received your email! We get back to you later, Thank you for contacting us.', '<i class="bx bx-mail-send bx-flashing"></i>', 'ok');
                    return back();
                }
            }else{
                $this->alert_msg('Something with your internet. Please check your connection.', '<i class="bx bx-wifi-off bx-flashing"></i>', 'fail');
                return back();
            }
            $this->alert_msg('An error occurred Please try again later.', '<i class="bx bxs-info-circle bx-flashing"></i>', 'fail');
            return back();
        }else{
            if(in_array($request->pricing_name, $allow_input) && in_array($request->price, $allow_input) && in_array($request->price_img_url, $allow_input)){
                if(!empty($request->attachment)){
                    $attachmentName = uniqid() . '.' . $request->attachment->extension();
                }else{
                    $attachmentName = NULL;
                }
                # DATA TO STORE AND EMAIL DATA
                $quoteRequestData = array(
                    'model_firstname' => $request->firstname,
                    'model_lastname' => $request->lastname,
                    'model_email' => $request->email,
                    'model_phone' => $request->phone,
                    'model_country' => $request->country,
                    'model_projectType' => $request->projectType,
                    'model_attachment_name' => $attachmentName,
                    'model_attachment' => $request->attachment,
                    'model_message' => $request->message,
                    'model_price_img_url' => $request->price_img_url,
                    'model_price' => $request->price,
                    'model_pricing_name' => $request->pricing_name,
                    'model_email_created' => date("l jS \of F Y h:i A"),
                    'model_reference_id' => bin2hex(openssl_random_pseudo_bytes(32))
                ); 
        
                if($this->isConnected()){ // check if connected to internet
                    Mail::to('admin@wguru.website')->send(new QuoteRequestMail($quoteRequestData)); // email process
                    if(Mail::failures()){ // check if email is fail
                        $this->alert_msg('An error occurred Please try again later.', '<i class="bx bxs-info-circle bx-flashing"></i>', 'fail');
                        return back();
                    }else{
                        if(!empty($request->attachment)){
                            $request->attachment->move(public_path('attachment/quote_request'), $attachmentName);
                        }
                        QuoteRequest::create($quoteRequestData); // store contact data to database and redirect back to homepage
                        $this->alert_msg('Our Team received your email! We get back to you later, Thank you for contacting us.', '<i class="bx bx-mail-send bx-flashing"></i>', 'ok');
                        return back();
                    }
                }else{
                    $this->alert_msg('Something with your internet. Please check your connection.', '<i class="bx bx-wifi-off bx-flashing"></i>', 'fail');
                    return back();
                }
                $this->alert_msg('Something went wrong, please try again later', '<i class="bx bxs-info-circle bx-flashing"></i>', 'fail');
                return back();
            }else{
                $this->alert_msg('Woopsie! Looks like something wrong!', '<i class="bx bxs-info-circle bx-flashing"></i>', 'fail');
                return back();
            }
        }
    }

    // check connection 
    public function isConnected($site = "https://youtube.com/"){
        if(@fopen($site, "r")){
            return true;
        }else{
            return false;
        }
    }

    public function about(){
        return view('users.pages.about');
    }

    // pricing---------------------------
    public function ecommerce(){
        return view('users.pages.pricing.e-commerce');
    }
    public function webdesign(){
        return view('users.pages.pricing.web-design');
    }
    public function seo(){
        return view('users.pages.pricing.seo');
    }
    public function smm(){
        return view('users.pages.pricing.smm');
    }
    // ------------------------------------

    public function services(){
        return view('users.pages.services');
    }

    public function works(){
        return view('users.pages.works');
    }

    public function contact(){
        return view('users.pages.contact');
    }

    public function getAQuote(){
        return view('users.pages.get-a-quote');
    }
}
