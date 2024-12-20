<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Partner;
use App\Models\Newsletter;
use App\Models\Blog;
use App\Models\SupportFAQ;
use App\Models\EpostuPricingPlan;
use App\Models\TruspanPricingPlan;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Mail\PHPMailerService;
use App\Models\ContactMessage;
use App\Http\Controllers\Controller;
use App\Models\EventRegistration;
use App\Models\GiftItem;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.homepage');
    }
    
    public function about()
    {
        return view('frontend.about');
    }

    public function eventRegistration()
    {
        return view('frontend.eventRegistration');
    }

    public function products($slug)
    {
        if($slug == 'epostu') {
            $basic_pricing = EpostuPricingPlan::where('status', 1)->where('plan_id', 1)->orderBy('id', 'DESC')->get();
            $premium_pricing = EpostuPricingPlan::where('status', 1)->where('plan_id', 2)->orderBy('id', 'DESC')->get();
            $corporate_pricing = EpostuPricingPlan::where('status', 1)->where('plan_id', 3)->orderBy('id', 'DESC')->get();

            return view('frontend.epostu', compact('basic_pricing', 'premium_pricing', 'corporate_pricing'));
        } elseif ($slug == 'truspam') {

            $basic_pricing = TruspanPricingPlan::where('status', 1)->where('plan_id', 1)->orderBy('id', 'DESC')->get();
            $premium_pricing = TruspanPricingPlan::where('status', 1)->where('plan_id', 2)->orderBy('id', 'DESC')->get();
            $corporate_pricing = TruspanPricingPlan::where('status', 1)->where('plan_id', 3)->orderBy('id', 'DESC')->get();

            return view('frontend.product-details', compact('basic_pricing', 'premium_pricing', 'corporate_pricing'));
        }

        abort(404);
    }
    
    public function knowledge($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $relatedBlogs = Blog::where('id', '!=', $blog->id)->take(5)->get();
        return view('frontend.knowledge', compact('blog', 'relatedBlogs'));
    }

    public function support()
    {
        $faqs = SupportFAQ::where('status', 1)->orderBy('id', 'DESC')->get();
        $blogs = Blog::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.support', compact('faqs', 'blogs'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function findPartner()
    {
        $models = Partner::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.find-partner', compact('models'));
    }

    public function becomePartner()
    {
        return view('frontend.become-partner');
    }

    public function submitContactForm(Request $request)
    {
        $formEntry = ContactMessage::updateOrCreate(
            ['session_id' => $request->session_id],
            [
                'first_name' => $request->name,
                'last_name' => $request->surname,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message 
            ]
        );

        if($formEntry && $request->form_submit) {
            $to = "sadi.khan@projukti-bd.com"; 
            $subject = "New Contact Form Submission";
            $body = "
                <h3>Contact Form Details</h3>
                <p><strong>First Name:</strong> {$request->name}</p>
                <p><strong>Last Name:</strong> {$request->surname}</p>
                <p><strong>Email:</strong> {$request->email}</p>
                <p><strong>Phone:</strong> {$request->phone}</p>
                <p><strong>Message:</strong> {$request->message}</p>
            ";

            $result = PHPMailerService::sendEmail($to, $subject, $body);
            // if (!$result) {
            //     return response()->json(['success' => true, 'txt' => $result, 'id' => $formEntry->id]);
            // }
        }

        return response()->json(['success' => true, 'txt' => 'Thank you for your submission. We will be in touch shortly.', 'id' => $formEntry->id]);
    }

    public function submitPartnerForm(Request $request)
    {
        $formEntry = Partner::updateOrCreate(
            ['session_id' => $request->session_id],
            [
                'first_name' => $request->name,
                'last_name' => $request->surname,
                'email' => $request->email,
                'phone' => $request->phone,
                'company_name' => $request->company_name,
                'contact_person' => $request->contact_person,
                'message' => $request->message 
            ]   
        );

        if($formEntry && $request->form_submit) {
            $to = "sadi.khan@projukti-bd.com"; 
            $subject = "New Partner Form Submission";
            $body = "
                <h3>Partner Form Details</h3>
                <p><strong>First Name:</strong> {$request->name}</p>
                <p><strong>Last Name:</strong> {$request->surname}</p>
                <p><strong>Email:</strong> {$request->email}</p>
                <p><strong>Phone:</strong> {$request->phone}</p>
                <p><strong>Company Name:</strong> {$request->company_name}</p>
                <p><strong>Contact Person:</strong> {$request->contact_person}</p>
                <p><strong>Message:</strong> {$request->message}</p>
            ";

            $result = PHPMailerService::sendEmail($to, $subject, $body);
            // if (!$result) {
            //     return response()->json(['success' => true, 'txt' => $result, 'id' => $formEntry->id]);
            // }
        }

        return response()->json(['status' => true, 'message' => 'Thank you for your submission. We will be in touch shortly.']);
    }

    public function submitNewsletterForm(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
        ]);

        // Check if email already exists
        if (Newsletter::where('email', $request->email)->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'You are already subscribed.'
            ]);
        }

        // Save the email if it doesn't exist
        Newsletter::create(['email' => $request->email]);

        return response()->json([
            'status' => true,
            'message' => 'Thank you for subscribing!'
        ]);
    }

    public function eventRegistrationSuccess($id) 
    {
        $event = EventRegistration::findOrFail(decode($id));

        return view('frontend.registration-successful', compact('event'));
    }

    public function submitEventRegistrationForm(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => [
                'required',
                'email',
                    function ($attribute, $value, $fail) {
                        $personalDomains = [
                            'gmail.com',
                            'yahoo.com',
                            'outlook.com',
                            'hotmail.com',
                            'aol.com',
                            'icloud.com',
                            'protonmail.com',
                            'zoho.com',
                            'gmx.com',
                        ];

                        $emailDomain = substr(strrchr($value, "@"), 1);

                        if (in_array($emailDomain, $personalDomains)) {
                            $fail("The $attribute must be a corporate email address.");
                        }
                    },
                ],
            ]
        );

        if (EventRegistration::where('email', $request->email)->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'You are already registered.'
            ]);
        }

        // Fetch all GiftItems matching the conditions
        $giftId = null;
        $gifts = GiftItem::where('status', 1)->where('quantity', '>', 0)->get();

        // Check if there are any matching results
        if ($gifts->isNotEmpty()) {
            // Pick a random item from the collection
            $gift = $gifts->random();
            $giftId = $gift->id;
        }

        // Save the email if it doesn't exist
        $model = EventRegistration::create([
            'first_name' => $request->name,
            'last_name' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'gift_id' => $giftId
        ]);

        if ($model) {
            $gift->quantity -= 1;
            $gift->save();
        
            $subject = get_settings('gift_template_subject') ?? 'Thank you for registering for our event | ePostU';
        
            // Prepare the data for the email template
            $data = [
                'subject' => $subject,
                'name' => $model->first_name . ' ' . $model->last_name,
                'email' => $model->email,
                'phone' => $model->phone,
                'gift_name' => $gift->name,
                'gift_picture' => asset($gift->photo),
            ];
        
            // Render the Blade template
            $body = view('emails.gift_notification', $data)->render();
        
            // Send the email (uncomment and use your preferred mail service)
            $mailer = PHPMailerService::sendEmail($model->email, $subject, $body);
        }
        
        return response()->json([
            'status' => true,
            'message' => 'Thank you for subscribing!',
            'goto' => route('event.registration.success', encode($model->id))
        ]);
    }

    public function checkoutProduct($product, $plan)
    {
        if($plan != 'basic' && $plan != 'premium' && $plan != 'corporate') {
            abort(404);
        }

        if($product == 'epostu') {
            return view('frontend.checkout', compact('product', 'plan'));
        } else if ($product == 'truspan') {
            return view('frontend.checkout', compact('product', 'plan'));
        }

        abort(404);
    }

    public function proceedCheckout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product' => 'required|string',
            'plan' => 'required|string',
            'pricing_plan_id' => 'required|integer',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits_between:10,15',
            'address' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'zip' => 'required|digits_between:4,10'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Failed',
                'errors' => $validator->errors()
            ]);
        }

        if($request->product != 'epostu' && $request->product != 'truspan') {
            return response()->json(['status' => false, 'message' => 'Product not found.']);
        }

        $pricing_plan = 'monthly';
        if($request->pricing_plan_id == 1) {
            $pricing_plan = 'yearly';
        }

        $formEntry = Order::create(
            [
                'product' => $request->product,
                'plan' => $request->plan,
                'pricing_plan' => $request->pricing_plan_id == 0 ? 'monthly' : 'yearly',
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'address2' => $request->address2,
                'email' => $request->email,
                'phone' => $request->phone,
                'country' => $request->country, 
                'zip' => $request->zip 
            ]
        );

        if($formEntry) {
            $to = "sadi.khan@projukti-bd.com"; 
            $subject = "New Order Submission";
            $body = "
                <h3>Order Form Details</h3>
                <p><strong>Product:</strong> {$request->product}</p>
                <p><strong>Pricing Plan:</strong> {$pricing_plan}</p>
                <p><strong>First Name:</strong> {$request->first_name}</p>
                <p><strong>Last Name:</strong> {$request->last_name}</p>
                <p><strong>Email:</strong> {$request->email}</p>
                <p><strong>Phone:</strong> {$request->phone}</p>
                <p><strong>Address:</strong> {$request->address}</p>
                <p><strong>Address 2:</strong> {$request->address2}</p>
                <p><strong>Country:</strong> {$request->country}</p>
                <p><strong>Zip:</strong> {$request->zip}</p>
            ";

            PHPMailerService::sendEmail($to, $subject, $body);
            // if (!$result) {
            //     return response()->json(['success' => true, 'txt' => $result, 'id' => $formEntry->id]);
            // }
        }

        if($request->product == 'epostu') {
            return response()->json(['success' => true, 'message' => 'Thank you for your submission. We will be in touch shortly.', 'goto' => route('product', 'epostu')]);
        } else {
            return response()->json(['success' => true, 'message' => 'Thank you for your submission. We will be in touch shortly.', 'goto' => route('product', 'truspam')]);
        }
        
    }
}
