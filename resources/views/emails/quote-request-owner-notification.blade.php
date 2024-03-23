@component('mail::message')
# New Quote Request

Hello,

You have received a new quote request from a user:

- **Name:** {{ $quote->name }}
- **Email:** {{ $quote->email }}
- **Phone:** {{ $quote->phone }}
- **Service:** {{ $quote->service }}
@if (!empty($quote->message))
    - **Message:** {{ $quote->message }}
@endif

Thanks,  
JRMHD
@endcomponent
