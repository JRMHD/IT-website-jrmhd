<!-- new-subscriber-notification.blade.php -->

@component('mail::message')
# New Subscriber Notification

Hello,

You have a new subscriber to your website.

**Name:** {{ $name }}  
**Email:** {{ $email }}

Thanks,  
JRMHD Team
@endcomponent
