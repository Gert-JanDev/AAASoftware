@component('mail::message')
Bedrijfsnaam: {{ $data['company'] }} <br>
Voornaam: {{ $data['firstName'] }} <br>
Achternaam: {{ $data['lastName'] }} <br> 
Telefoon: {{ $data['phone'] }} <br>
Email: {{ $email = $data['email'] }} <br>

Bericht:
{{ $data['info'] }}

@component('mail::button', ['url' => 'mailto:{{ $email }}'])
Reply
@endcomponent

{{ config('app.name') }}
@endcomponent
