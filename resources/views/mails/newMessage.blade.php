@component('mail::message')
    <h1>Iemand heeft een bericht voor je achtergelaten!</h1>  {{-- use double space for line break --}}
    <p>Iemand heeft je een bericht gestuurd via je website!<p>
    <p><b>Naam: {{ $firstname }} {{ $lastname }}</b></p>
    <p>Mail: <a href="mailto:{{$email}}">{{$email}}</a></p>
    <p>Reden: {{ $reason }}</p>
    <h2>Bericht:</h2>
    <p>{{$message}}</p>
    <br>
    <p>Met vriendelijke groet,<br>
    Jezelf</p>
@endcomponent
