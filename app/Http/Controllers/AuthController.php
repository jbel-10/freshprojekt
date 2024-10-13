<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function show()
    {
        return view('pages.admin');
    }

    public function login(Request $request)
    {
        // Overeni inputu
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Vyhledani admina
        $admin = Admin::where('username', $request->username)->first();
        
        // Pokud najdes admina, zkontroluj heslo
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Uloz ID admina 
            session(['admin_id' => $admin->id]);

            // Redirect to the admin dashboard or another page
            return redirect()->route('pages.admindashboard')->with('success', 'Prihlaseni uspesne');
        } else {
            // Return back with an error if the credentials are wrong
            return back()->withErrors(['loginError' => 'Nespravne prihlasovaci udaje.']);
        }
    }

    public function logout(Request $request)
    {
        // Remove the admin session (log the admin out)
        $request->session()->forget('admin_id');

        // Redirect to the login page
        return redirect('/admin')->with('success', 'Odhlaseni probehlo uspesne.');
    }
}
