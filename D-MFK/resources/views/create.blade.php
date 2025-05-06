<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Reserva de Sala de Aula</title>
  <link rel="stylesheet" href="style.css">
  @vite(['resources/css/detalhes.css', 'resources/js/detalhes.js'])
</head>
<body>
  <header>
    <div class="logo">SISTEMA DE RESERVA DE SALA DE AULA</div>
    <div>D-MFK</div>
  </header>

  <div class="modal">
    <span class="close">&times;</span>
    <h2>DETALHES DA RESERVA</h2>
    <p>Aula: <span></span></p>
    <p>________________________________________________________</p>
    <p>Data: <span></span></p>
    <p>________________________________________________________</p>
    <p>Horário: <span></span></p>
    <p>________________________________________________________</p>
    <p>Professor: <span></span></p>
    <p>________________________________________________________</p>

    <div class="buttons">
      <button class="btn btn-edit">EDITAR</button>
      <button class="btn btn-cancel">CANCELAR</button>
    </div>
  </div>
</body>
</html>