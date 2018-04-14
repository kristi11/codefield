@component('mail::message')
# Welcome to {{config('app.name')}} {{ $user->name }}

Hello there {{ $user->name }},<br>
We just want to say thank you for joining us.<br>
As part of {{config('app.name')}} you will have full access to our products until at least July 2019.<br>
After that if you still wish to have full access there will be a $3/month fee.
If you don't want to subscribe you will still have access but will not be able to 
download all of our projects.
So buy us a coffee once a month and we've got you covered <br>
Check out <a href="{{url('/')}}"> your dashboard</a> to see all kinds of different tools<br>
that will come in handy for your different projects.<br>
We are excited to have you as part of our community and we hope you stay with us for a very long time<br>

One more thing
When you sign up for {{config('app.name')}} by default you have e-mail notifications enabled.
This is for your convenience so you stay informed on the latest products that we have to offer.
If you don't want e-mail notifications you can disable them by clicking the notification icon
on the top right corner of the page.

@component('mail::button', ['url' => url('/')])
Go to your dashboard
@endcomponent

@component('mail::panel')
You are recieving this e-mail because you are now Part of {{config('app.name')}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
