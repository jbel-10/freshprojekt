<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber; 
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validace emailu
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        try {
            // Uloz subscribera
            NewsletterSubscriber::create([
                'email' => $request->email
            ]);

            // Redirect pri success
            return redirect()->back()->with('success', 'Dekujeme za prihlaseni do newsletteru');
        } catch (\Exception $e) {
            
            // Redirect pri chybe
            return redirect()->back()->with('error', 'Stala se chyba. Prosim zkuste pozdeji.');
        }
    }
}
