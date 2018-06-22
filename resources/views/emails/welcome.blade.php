@component('mail::message')
# Welcome to {{config('app.name')}} {{ $user->name }}

We just want to say thank you for joining us.<br>
As part of {{config('app.name')}} you will have full access to our products.<br>

Check out <a href="{{url('/')}}"> your dashboard</a> to see all kinds of different tools<br>
that will come in handy for your different projects.<br>
We are excited to have you as part of our community and we hope you stay with us for a very long time<br>

One more thing
When you sign up for {{config('app.name')}} by default you have e-mail notifications disabled.
If you want to stay updated on the latest products that are added on our platform you can enable email notifications.
To enable e-mail notifications you can click the notification icon
on the top right corner of the page. Doing so the icon will turn from gray to blue-ish meaning you will now recieve email notifications on any products that are added on the platform. If you change you mind you can always disable these notifications at the click of that button.

@component('mail::button', ['url' => url('/')])
Go to your dashboard
@endcomponent

@component('mail::panel')
You are recieving this e-mail because you signed up for {{config('app.name')}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
