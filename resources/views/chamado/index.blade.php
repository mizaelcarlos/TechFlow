<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Chamados</title>
</head>
<body>
    <h1>Lista de Chamados</h1>

    <ul>
        @foreach ($chamados as $chamado)
            <li>
                {{ $chamado->titulo }}
                {{ $chamado->descricao }}
            </li>
        @endforeach
    </ul>
</body>
</html>
