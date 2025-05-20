<!-- resources/views/reservations/index.blade.php -->
<div class="reservas-list">
  @foreach ($reservations as $reservation)
    <div class="reservation-item">
      <div class="card-header">
        <h3>DETALHES DA RESERVA</h3>
        <button class="close-btn" aria-label="Fechar">&times;</button>
      </div>
      <div class="card-body">
      <div class="detail">
          <span class="label">Sala:</span>
          <span class="value">{{ $reservation->sala }}</span>
        </div>
        <div class="detail separator"></div>
        <div class="detail">
          <span class="label">Data de Início:</span>
          <span class="value">
            {{ \Carbon\Carbon::parse($reservation->dataInicio)->format('d/m/Y') }}
          </span>
        </div>
        <div class="detail separator"></div>
        <div class="detail">
          <span class="label">Data Final:</span>
          <span class="value">
            {{ \Carbon\Carbon::parse($reservation->dataFinal)->format('d/m/Y') }}
          </span>
        </div>
      </div>
      <div class="card-footer">
        <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-action">Editar</a>
        <form action="{{ route('reservations.destroy', $reservation) }}"
              method="POST"
              onsubmit="return confirm('Cancelar esta reserva?');">
          @csrf @method('DELETE')
          <button type="submit" class="btn btn-action">Cancelar</button>
        </form>
      </div>
    </div>
  @endforeach

  <a href="{{ route('reservations.create') }}" class="btn btn-back">Voltar</a>
</div>

<Style>
/* Container geral */
.reservas-list {
  max-width: 600px;
  margin: 2rem auto;
  padding: 0 1rem;
  font-family: "Segoe UI", Arial, sans-serif;
}

/* CARD */
.reservation-item {
  background-color: #ecebeb;
  border: 1px solid #333;
  border-radius: 12px;
  overflow: hidden;
  margin-bottom: 2rem;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

/* HEADER */
.card-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #ecebeb;
  padding: 1rem 1.5rem;
  border-bottom: 1px solid #999;
}
.card-header h3 {
  margin: 0;
  font-size: 1.25rem;
  font-weight: 700;
}
.close-btn {
  background: transparent;
  border: none;
  font-size: 1.5rem;
  line-height: 1;
  color: #666;
  cursor: pointer;
}

/* BODY */
.card-body {
  padding: 1rem 1.5rem;
}
.detail {
  display: flex;
  align-items: center;
  padding: 0.75rem 0;
}
.separator {
  border-top: 1px solid #999;
  margin: 0; /* linha separadora sem texto */
}
.label {
  flex: 0 0 130px;
  font-weight: 600;
}
.value {
  flex: 1;
  color: #222;
}

/* FOOTER */
.card-footer {
  display: flex;
  justify-content: center;
  gap: 1rem;
  padding: 1rem 1.5rem;
  background-color: transparent;
}
.btn-action {
  flex: 1;
  max-width: 140px;
  padding: 0.75rem 0;
  border: none;
  border-radius: 4px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  text-decoration: none;
  color: #fff;
  text-align: center;
}
.btn-action:first-child {
  background-color: #000;
}
.btn-action:last-child {
  background-color: #c0392b;
}
.btn-action:hover {
  opacity: 0.9;
}

/* BOTÃO VOLTAR */
.btn-back {
  display: inline-block;
  margin: 0 auto 2rem;
  background-color: #3182ce;
  color: #fff;
  padding: 0.75rem 1.5rem;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 600;
  text-align: center;
}
.btn-back:hover {
  background-color: #2b6cb0;
}
</Style>
