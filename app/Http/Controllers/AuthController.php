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

            // updatovani admins tabulky 
            $admin->last_login_at = now();  
            $admin->last_login_ip = $request->ip(); 
            $admin->save();

            // Uloz ID admina 
            session(['admin_id' => $admin->id]);

            // Presmerovani na dashboard
            return redirect()->route('pages.admindashboard')->with('success', 'Prihlaseni uspesne');
        } else {
            // Chyba pri nespravynch prihlasovacich udajich
            return back()->withErrors(['loginError' => 'Nespravne prihlasovaci udaje.']);
        }
    }

    public function logout(Request $request)
    {
        // Odhlaseni 
        $request->session()->forget('admin_id');

        // Presmerovani na login page
        return redirect('/admin')->with('success', 'Odhlaseni probehlo uspesne.');
    }
}
