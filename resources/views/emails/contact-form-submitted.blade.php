<!-- resources/views/mail/contact-form-submitted.blade.php -->

@component('mail::message')
# New Contact Form Submission

Hello,

A new contact form submission has been received:

- **Name:** {{ $submission->name }}
- **Email:** {{ $submission->email }}
- **Phone:** {{ $submission->phone }}
@if ($submission->message)
- **Message:** {{ $submission->message }}
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent
