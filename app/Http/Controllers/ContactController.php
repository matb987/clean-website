<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'service' => 'required|string',
            'message' => 'nullable|string',
        ]);

        // Example: Log the request or send an email (customize as needed)
        Log::info('Contact form submitted', $validated);

        // Optionally, send an email notification here
        // Mail::to(config('mail.from.address'))->send(new ContactFormMail($validated));

        return redirect('/')->with('success', 'Thank you for your request! We will contact you soon.');
    }
}
