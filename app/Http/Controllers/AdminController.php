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
            return redirect()->route('/')->with('error', 'Invalid email or password.');
        }
    }
}
