<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QuoteRequest;
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

    // Save the quote request to the database
    $quote = QuoteRequest::create(
        [
            'name' => $request['name'],
            'email' => $request['email'],
            'service' => $request['service'],
            'message' => $request['message'] ?? null,
        ]
    );

    // Debug: Log the created model and check if it has an ID
    Log::info('Quote request created', ['model' => $quote, 'attributes' => $quote->getAttributes()]);

    // Optionally, log or send an email notification here
    // Mail::to(config('mail.from.address'))->send(new ContactFormMail($validated));

    return redirect('/')->with('success', 'Thank you for your request! We will contact you soon.');
    }
}
