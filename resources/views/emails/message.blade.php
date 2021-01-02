@component('mail::message')
# {{ config('app.name') }}

From to : {{ $email }}

<b><i><u>Object </u></i></b>: {{ $subject }} <br>

Bonjour Chèr CEO de {{ config('app.name') }},
Je suis <b>{{ $name }}</b>

@component('mail::panel')
	{{ $msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
