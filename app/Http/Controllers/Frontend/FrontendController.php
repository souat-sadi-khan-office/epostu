<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\PHPMailerService;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\ContactMessage;
use App\Models\Newsletter;
use App\Http\Controllers\Controller;

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

    public function products($slug)
    {
        if($slug == 'epostu') {
            return view('frontend.epostu');
        } else {
            return view('frontend.product-details');
        }
    }
    
    public function knowledge($slug)
    {
        return view('frontend.knowledge');
    }

    public function support()
    {
        return view('frontend.support');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function findPartner()
    {
        return view('frontend.find-partner');
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
}
