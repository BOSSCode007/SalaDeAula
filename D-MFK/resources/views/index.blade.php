<div class="reservas-list">
    @foreach ($reservations as $reservation)
        <div class="reservation-item">
            <a href="{{ route('reservations.edit', ['reservation' => $reservation->id]) }}">
                {{ $reservation->id }} 
                {{ $reservation->sala }} 
                {{ $reservation->dataInicio }} 
                {{ $reservation->dataFinal }} 
            </a>
            <form action="{{ route('reservations.destroy', ['reservation' => $reservation->id]) }}" method="POST" style="display: inline;">
                @method('DELETE')
                @csrf
                <input class="btn btn-delete" type="submit" value="Apagar" />
            </form>
        </div>
    @endforeach
</div>

<a class="btn" href="{{ route('reservations.create')}}">Voltar</a>



<Style>
    .btn {
        background-color:rgb(76, 107, 175); /* Green */
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
    .btn1 {
        background-color:rgb(244, 62, 11); /* Green */
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