
@foreach ($reservations as $reservation )
    <a href="{{ route('reservations.edit', ['reservation' => $reservation->id]) }}">
        {{ $reservation->id }} 
        {{ $reservation->aula }} 
        {{ $reservation->data }} 
        {{ $reservation->horario }} 
        {{ $reservation->professor }}
    </a>
    <form action="{{ route('reservations.destroy', ['reservation' => $reservation->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Apagar" />
    </form>
@endforeach

<a class="btn" href="{{ route('reservations.create')}}"> Voltar </a>

<Style>
    .btn {
        background-color:rgb(175, 76, 76); /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</Style>