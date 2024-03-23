<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactFormController extends Controller
{
    /**
     * Store a newly created contact form submission in the database and send email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitForm(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        // Create a new ContactFormSubmission instance and fill it with request data
        $submission = new ContactFormSubmission();
        $submission->name = $request->name;
        $submission->email = $request->email;
        $submission->phone = $request->phone;
        $submission->message = $request->message;

        // Save the submission to the database
        $submission->save();

        // Send email notification
        Mail::to('jrmqhd@gmail.com')->send(new ContactFormSubmitted($submission));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message Sent successfully!');
    }
}
