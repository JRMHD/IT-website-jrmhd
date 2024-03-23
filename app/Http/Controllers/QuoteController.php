<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use App\Mail\QuoteRequestOwnerNotification;
use App\Mail\QuoteRequestUserNotification;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Create a new quote instance and fill it with request data
        $quote = new Quote();
        $quote->name = $request->name;
        $quote->email = $request->email;
        $quote->phone = $request->phone;
        $quote->service = $request->service;
        $quote->message = $request->message;

        // Save the quote to the database
        $quote->save();

        // Send notification email to owner
        Mail::to('jrmqhd@gmail.com')->send(new QuoteRequestOwnerNotification($quote));

        // Send thank you email to the user
        // Send thank you email to the user
        Mail::to($quote->email)->send(new QuoteRequestUserNotification($quote));



        // Redirect back with a success message
        return redirect()->back()->with('success', 'Quote submitted successfully!');
    }
}
