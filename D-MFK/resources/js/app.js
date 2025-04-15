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
                .voltar { background-color: #333; color: white; padding: 10px; margin-top: 20px; cursor: pointer; }
            </style>
        </head>
        <body>
            <div class="container">
                <h2>Agendar Sala</h2>
                <form id="agendamento-form">
                    <label for="sala">Escolha a Sala:</label>
                    <select id="sala" required>
                        <option value="Sala de Leitura">Sala de Leitura</option>
                        <option value="Sala de Reunião">Sala de Reunião</option>
                        <option value="Sala de Computação">Sala de Computação</option>
                    </select>

                    <label for="data">Data:</label>
                    <input type="date" id="data" required>

                    <label for="horario">Horário:</label>
                    <input type="time" id="horario" required>

                    <button type="submit">Confirmar Agendamento</button>
                </form>

                <h2>Horários Agendados</h2>
                <table id="horariosTable">
                    <tr class="horarios-header">
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Sala</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </table>

                <!-- Botão de voltar atualizado -->
                <button class="voltar" onclick="window.location.href='dmfk.html'">Voltar à Página Inicial</button>
            </div>

            <script>
                function preencherTabela() {
                    let tabela = document.getElementById("horariosTable");
                    let agendamentos = JSON.parse(localStorage.getItem("agendamentos")) || [];

                    tabela.innerHTML = "<tr class='horarios-header'><th>Data</th><th>Horário</th><th>Sala</th><th>Status</th><th>Ações</th></tr>";

                    agendamentos.forEach((agendamento, index) => {
                        let linha = tabela.insertRow();
                        linha.insertCell(0).innerText = agendamento.data;
                        linha.insertCell(1).innerText = agendamento.horario;
                        linha.insertCell(2).innerText = agendamento.sala;
                        linha.insertCell(3).innerText = "Indisponível";
                        linha.cells[3].classList.add("indisponivel");

                        let botaoExcluir = document.createElement("button");
                        botaoExcluir.innerText = "Excluir";
                        botaoExcluir.classList.add("delete");
                        botaoExcluir.onclick = function () {
                            excluirAgendamento(index);
                        };

                        linha.insertCell(4).appendChild(botaoExcluir);
                    });
                }

                function excluirAgendamento(index) {
                    let agendamentos = JSON.parse(localStorage.getItem("agendamentos")) || [];
                    agendamentos.splice(index, 1);
                    localStorage.setItem("agendamentos", JSON.stringify(agendamentos));
                    preencherTabela();
                }

                document.getElementById("agendamento-form").addEventListener("submit", function (event) {
                    event.preventDefault();

                    let sala = document.getElementById("sala").value;
                    let data = document.getElementById("data").value;
                    let horario = document.getElementById("horario").value;

                    if (!data || !horario) {
                        alert("Por favor, preencha todos os campos.");
                        return;
                    }

                    let agendamentos = JSON.parse(localStorage.getItem("agendamentos")) || [];
                    agendamentos.push({ sala, data, horario });

                    localStorage.setItem("agendamentos", JSON.stringify(agendamentos));
                    alert("Agendamento realizado com sucesso!");

                    preencherTabela();
                });

                window.onload = preencherTabela;
            </script>
        </body>
        </html>
    `);
});
