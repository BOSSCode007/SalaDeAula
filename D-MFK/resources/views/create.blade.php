<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reserva de Sala de Aula</title> 
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/detalhes.css', 'resources/js/detalhes.js'])
</head>
<body>
    <header>
        <h1>SISTEMA DE RESERVA DE SALA DE AULA</h1>
        <div class="logo-mfk">D-MFK</div>
    </header>

    <main class="container">
        <div class="gatinho">
            <form action="{{ isset($reservations) ? 
            route('reservations.update', ['reservation' => $reservations->id]) : 
            route('reservations.store') }}" method="POST">
            @isset($reservations)
                @method('PUT')
            @endisset
            @csrf

            <div class="reservas-section">
                <h2>RESERVAS</h2>
                <div class="radio-buttons">
                    <input type="radio" id="todas" name="reservas" value="todas" checked>
                    <label for="todas">Todas</label>
                    <input type="radio" id="minhas" name="reservas" value="minhas">
                    <label for="minhas">Minhas Reservas</label>
                </div>
            </div>

            <div class="sala-section">
                <div class="sala-selector">
                    <input type="text" name="sala" value="{{ $reservations->sala ?? ''}}" placeholder="Escreva o nome da Sala"/>
                </div>
                
                <div class="date-range">
                    <label for="dataInicio">DATA INÍCIO:</label>
                    <input type="date" name="dataInicio" value="{{ $reservations->dataInicio ?? ''}}" placeholder="Data Início"/>
                    <label for="dataFinal">DATA FINAL:</label>
                    <input type="date" name="dataFinal" value="{{ $reservations->dataFinal ?? ''}}" placeholder="Data Final">
                </div>

                <div class="action-buttons">
                    <button type="submit" class="btn btn-edit">Salvar</button>
                    <a class="btn btn-edit" href="{{ route('welcome')}}">Voltar</a>
                </div>
            </div>
        </form>

        <div class="schedule-table">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>00h</th>
                        <th>01h</th>
                        <th>02h</th>
                        <th>03h</th>
                        <th>04h</th>
                        <th>05h</th>
                        <th>06h</th>
                        <th>07h</th>
                        <th>08h</th>
                        <th>09h</th>
                        <th>10h</th>
                        <th>11h</th>
                        <th>12h</th>
                        <th>13h</th>
                        <th>14h</th>
                        <th>15h</th>
                        <th>16h</th>
                        <th>17h</th>
                        <th>18h</th>
                        <th>19h</th>
                        <th>20h</th>
                        <th>21h</th>
                        <th>22h</th>
                        <th>23h</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="25" class="day-header">SEGUNDA, 14/04/2025</td>
                    </tr>
                    <tr>
                        <td class="room-name">SALA DE LEITURA</td>
                        <td colspan="9"></td>
                        <td colspan="2" class="reserved-slot">Aula de<br>PBE - DS 2</td>
                        <td colspan="14"></td>
                    </tr>
                    <tr>
                        <td class="room-name">SALA DE REUNIÕES</td>
                        <td colspan="24"></td>
                    </tr>
                    <tr>
                        <td class="room-name">SALA DE INFORMÁTICA</td>
                        <td colspan="24"></td>
                    </tr>
                    <tr>
                        <td colspan="25" class="day-header">TERÇA, 15/04/2025</td>
                    </tr>
                    <tr>
                        <td class="room-name">SALA DE LEITURA</td>
                        <td colspan="24"></td>
                    </tr>
                    <tr>
                        <td class="room-name">SALA DE REUNIÕES</td>
                        <td colspan="24"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
