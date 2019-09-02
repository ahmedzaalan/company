@component('mail::message')

Thank you for suscribtion
<img src="{{url(Storage::url('image1.jpg'))}}"/>

@component('mail::button', ['url' => 'www.google.com'])
Go to out Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
