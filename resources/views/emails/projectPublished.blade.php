@component('mail::message')
 # Hello there <br>

<p>As requested we are letting you know that a new product was published at {{config('app.name')}}</p>

@component('mail::button', ['url' => url('/products').'/'.$project->title])
Check it out
@endcomponent

If you do not wish to recieve email notifications anymore you can click the button below and then click on
<b>Account settings</b>

@component('mail::button', ['url' => url('/').'/'.$user->slug.'/products'])
Manage email notifications
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent
