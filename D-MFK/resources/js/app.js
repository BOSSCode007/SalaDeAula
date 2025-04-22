import './bootstrap';
document.addEventListener('DOMContentLoaded', function() {
    // Foco no primeiro item do menu
    const firstNavLink = document.querySelector('nav ul li a');
    if (firstNavLink) {
        firstNavLink.focus();
    }

    // Efeito de hover no menu
    const navLinks = document.querySelectorAll("nav ul li a");
    navLinks.forEach(link => {
        link.addEventListener("mouseover", () => {
            link.style.color = "#FFD700";
        });
        link.addEventListener("mouseout", () => {
            link.style.color = "white";
        });
    });
});







document.getElementById("agendar").addEventListener("click", function () {
    var novaPagina = window.open("", "_blank");

    novaPagina.document.write(`
             <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Sala</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; padding: 20px; text-align: center; }
        .container { max-width: 800px; margin: auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 10px; text-align: center; }
        .disponivel { background-color: lightgreen; }
        .indisponivel { background-color: lightcoral; }
        .horarios-header { background-color: #333; color: white; }
        button { padding: 6px; cursor: pointer; margin: 2px; border: none; }
        .delete { background-color: red; color: white; }
        .filter-btn { background-color:rgb(0, 0, 0); color: white; padding: 10px; margin: 5px; cursor: pointer; }
        header { position: absolute; top: 10px; left: 20px;z-index: 10;display: flex;align-items: center;justify-content: space-between; width: calc(100% - 40px); }
        .logo-img {width: 150px; height: auto;}
        footer {text-align: center;padding: 5px;background-color: #111; color: #F4F4F4;}
        .agenda {width: 100%;border-collapse: collapse;margin-top: 30px;}
        .agenda thead th {background-color:rgb(0, 0, 0);color: #F4F4F4;text-align: center;padding: 10px; font-weight: bold; border: 1px solid black;}
        .agenda tbody td {height: 50px; border: 1px solid black;text-align: center;}
        .agenda tbody td:first-child {font-weight: bold;}
        .container { display: flex;justify-content: space-between;}
    </style>
    <header>
        <img src="dmfk.png" alt="Logo D-MFK" class="logo-img">
    </header>
</head>
    <body>
    <div class="container">
        <div>
            <h2>Agendar Sala</h2>
            <label for="sala">Escolha a Sala:</label>
            <select id="sala" name="sala">
                <option value="leitura">Sala de Leitura</option>
            </select>
            <br><br>
            <label for="data">Data:</label>
        <input type="date" id="data" name="data">
            <br><br>
            <label for="horario">Horário:</label>
            <input type="time" id="horario" name="horario"><br><br>
            <button>Confirmar Agendamento</button>
        </div>

        <div>
            <h2>Filtrar Reservas</h2>
            <input type="radio" id="todas" name="filtro" value="todas">
            <label for="todas">Todas</label>
            <input type="radio" id="reservadas" name="filtro" value="reservadas">
            <label for="reservadas">Reservadas</label>
        </div>
    </div>
        <table class="agenda">
      <thead>
        <tr>
          <th>
          <th>SEGUNDA <br></th>
          <th>TERÇA <br> </th>
          <th>QUARTA <br></th>
          <th>QUINTA <br></th>
          <th>SEXTA <br></th>
          <th>SÁBADO <br></th>
          <th>DOMINGO <br></th>
        </tr>
      </thead>
      <tbody>
        <tr><td>06:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>07:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>08:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>09:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>10:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>11:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>12:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>13:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>14:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>15:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>16:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>17:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>18:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>19:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>20:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td>21:00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
      </tbody>
    </table>
    </div>
    <br><br>
    <footer>
        <p>&copy; 2025 D-AFK. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

    `);
});