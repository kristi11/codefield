@component('mail::message')
# Welcome to {{config('app.name')}} {{ $user->name }}

We just want to say thank you for joining us.<br>
As part of {{config('app.name')}} you will have full access to our products.<br>

Check out <a href="{{url('/')}}"> your dashboard</a> to see all kinds of different tools<br>
that will come in handy for your different projects.<br>
We are excited to have you as part of our community and we hope you stay with us for a very long time<br>

One more thing
When you sign up for {{config('app.name')}} by default you have e-mail notifications enabled so you  stay up to date with the latest products that get added on {{config('app.name')}}. If you want to disable these notifications you can do so by clicking the button below and then clicking on <b>Account settings</b> on your profile.

@component('mail::button', ['url' => url('/').'/'.$user->slug.'/products'])
Manage email notifications
@endcomponent

@component('mail::panel')
You are recieving this e-mail because you signed up for {{config('app.name')}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
