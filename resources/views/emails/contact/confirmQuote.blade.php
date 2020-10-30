@component('mail::message')
Geachte,<br>
<br>
Wij hebben zojuist uw bericht met de volgende data ontvangen.

Bedrijfsnaam: {{ $data['company'] }} <br>
Voornaam: {{ $data['firstName'] }} <br>
Achternaam: {{ $data['lastName'] }} <br> 
Telefoon: {{ $data['phone'] }} <br>
Email: {{ $data['email'] }} <br>

Bericht:
{{ $data['info'] }}

Dit is een email ter bevestiging dat uw bericht is binnen gekomen, wij proberen u zo snel mogelijk te helpen. <br>
U hoeft niet te antwoorden op deze mail.

Met vriendelijke groeten,

Het AAASoftware Team.

{{ config('app.name') }}
@endcomponent
