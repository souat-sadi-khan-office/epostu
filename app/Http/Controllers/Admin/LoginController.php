<?php

namespace App\Http\Controllers\Admin;

use App\CPU\Helpers;

use App\Models\Partner;
use App\Models\ContactMessage;
use App\Models\Newsletter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interface\AuthRepositoryInterface;

class LoginController extends Controller
{
    protected $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        // return view('backend.auth.login');
        return $this->authRepository->form();
    }

    public function login(Request $request)
    {
        $guard = $this->authRepository->login($request, 'admin');

        if ($guard) {
            $request->session()->regenerate();
            return response()->json([
                'status' => true, 
                'goto' => route('admin.dashboard'),
                'message' => "Login successfully"
            ]);
        }

        return response()->json([
            'status' => false, 
            'message' => "The provided credentials do not match our records"
        ]);
    }

    public function logout()
    {
        $this->authRepository->logout('admin');  
        
        return response()->json([
            'status' => true, 
            'goto' => route('admin.login'),
            'message' => "Logout successful"
        ]);
    }

    public function dashboard()
    {
        $total_partner_active = Partner::where('status', 1)->count();
        $total_partner = Partner::count();
        $total_contact_message = ContactMessage::count();
        $total_subscribers = Newsletter::count();

        $latest_partners = Partner::orderBy('id', 'DESC')->take(5)->get();
        $latest_messages = ContactMessage::orderBy('id', 'DESC')->take(5)->get();
        $latest_subscribers = Newsletter::orderBy('id', 'DESC')->take(5)->get();

        return view('admin.dashboard', compact('latest_partners', 'latest_messages', 'latest_subscribers', 'total_partner_active', 'total_partner', 'total_contact_message', 'total_subscribers'));
    }
}