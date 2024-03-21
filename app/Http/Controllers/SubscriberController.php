<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Mail\NewSubscriberNotification;
use App\Mail\ThankYouForSubscribing;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    /**
     * Store a newly created subscriber in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email_address' => 'required|email|unique:subscribers,email_address',
        ]);

        // Store subscriber data to the database
        $subscriber = Subscriber::create([
            'name' => $request->name,
            'email_address' => $request->email_address,
        ]);

        // Send notification email to owner
        Mail::to('jrmqhd@gmail.com')->send(new NewSubscriberNotification($request->name, $request->email_address));

        // Send thank you email to the user
        Mail::to($request->email_address)->send(new ThankYouForSubscribing($request->name));

        // Redirect back with success message
        return redirect()->back()->with('success', 'You have successfully subscribed!');
    }
}
