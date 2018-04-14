@component('mail::message')
# Welcome to Rek Studio {{ $subscriber->first_name }}

Hello there {{ $subscriber->first_name }},<br>
We just want to say thank you for subscribing to our newsletter.<br>
And as a subscriber you will get exclusive stuff from Rek Studio which will be e-mailed to you,
 or you can get them directly from <a href="http://localhost/rekstudio/store"> our store</a>.<br>
 Cool FREE stuff are about to come in your way.

@component('mail::button', ['url' => 'http://localhost/rekstudio/store'])
Check out the store
@endcomponent

@component('mail::panel')
You are recieving this e-mail because you subscribed to our Newsletter
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
