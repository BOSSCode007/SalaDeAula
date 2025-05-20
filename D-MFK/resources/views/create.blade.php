<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/detalhes.css', 'resources/js/detalhes.js'])

    <title>Formulário Create/Edit</title>
</head>
<body>
    <Form action="{{ isset($reservations) ? 
    route('reservations.update', ['reservation' => $reservations->id]) : 
    route('reservations.store') }}" method="POST">
    @isset($reservations)
        @method('PUT')
    @endisset
    @csrf
        <input type="text" name="aula" value="{{ $reservations->aula ?? ''}}"/>
        <input type="date" name="data" value="{{ $reservations->data ?? ''}}"/>
        <input type="time" name="horario" value=" {{ $reservations->horario ?? ''}}"/>
        <input type="text" name="professor" value=" {{ $reservations->professor ?? ''}}"/>
        <button class="btn btn-edit">Salvar</button>
    </Form>

    <a class="btn" href="{{ route('welcome')}}"> Voltar </a>
    
</body>
</html>



