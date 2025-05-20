
@foreach ($reservations as $reservation )
    {{ $reservation->aula }}
    {{ $reservation->data }}
    {{ $reservation->horario }}
    {{ $reservation->professor }}
@endforeach

<a href="{{ route('reservations.create')}}"> Voltar <a/>;
