<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Status</title>
</head>
<body>
    <div>
        <h1>Detalhes do Status</h1>

       
        <div>
            <p><b>ID:</b> {{ $status->id }}</p>
            <p><b>Nome:</b> {{ $status->nome }}</p>
            <p><b>Cor:</b> <span style="color: {{ $status->cor }}">{{ $status->cor }}</span></p>
        </div>

        <div>
            <a href="{{ route('status.index') }}">Voltar para a lista</a>
            <a href="{{ route('status.edit', $status->id) }}">Editar</a>
            <form action="{{ route('status.destroy', $status->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </div>
    </div>
</body>
</html>
