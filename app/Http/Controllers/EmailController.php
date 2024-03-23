<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailNotification;

class EmailController extends Controller
{
    public function sendEmails(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:txt|max:2048', // Adjust max file size as needed
        ]);

        // Read the uploaded file
        $file = $request->file('file');
        $emails = file($file->path(), FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // Send email to each address
        foreach ($emails as $email) {
            Mail::to($email)->send(new EmailNotification());
        }

        // Optionally, you can redirect back or return a response
        return redirect()->back()->with('success', 'Emails sent successfully!');
    }
}
