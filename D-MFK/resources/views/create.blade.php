<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/detalhes.css', 'resources/js/detalhes.js'])

    <title>Formulário</title>
</head>
<body>
    <Form action="{{ route('reservations.store') }}" method="post">
    @csrf
        <input type="text" name="aula">
        <input type="date" name="data">
        <input type="time" name="horario">
        <input type="text" name="professor">
        <button class="btn btn-edit">Salvar</button>
    </Form>

    <a href="{{ route('welcome')}}"> Voltar <a/>;
    
</body>
</html>