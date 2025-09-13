<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin_dashboard');
    }

    public function student()
    {
        return view('admin_student');
    }

    public function payment()
    {
        return view('admin_payment');
    }

    public function setting()
    {
        return view('admin_setting');
    }

    public function report()
    {
        return view('admin_report');
    }

    public function adminlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Admin::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Optionally store user info in session
            session([
                'loggedUser' => [
                    'id' => $user->id,
                    'email' => $user->email,
                ]
            ]);


            // Redirect to admin dashboard
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        } else {
           return redirect()->route('welcome')->with('error', 'Invalid email or password.');
        }
    }

    public function logout(Request $request)
    {
        // Clear session
        $request->session()->forget('loggedUser');
        $request->session()->flush();

        // Redirect to login page
        return redirect('/')->with('success', 'You have been logged out.');
    }

}
