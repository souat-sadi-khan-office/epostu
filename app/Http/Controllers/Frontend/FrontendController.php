<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        dd($slug);
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
}
