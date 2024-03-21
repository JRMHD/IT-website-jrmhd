<!-- thank-you-for-subscribing.blade.php -->

@component('mail::message')
# Thank You for Subscribing

Hello {{ $name }},

Thank you for subscribing to our newsletter! We appreciate your interest in our tech company.

@component('mail::button', ['url' => 'https://www.jrmhd.tech', 'color' => 'primary'])
Visit Our Website
@endcomponent

Best regards,

JRMHD Team
@endcomponent
