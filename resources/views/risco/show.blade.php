<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Risco</title>
</head>
<body>
    <div>
        <h1>Detalhes do Risco</h1>

        <!-- Exibição dos detalhes do Risco -->
        <div>
            <p><b>ID:</b> {{ $risco->id }}</p>
            <p><b>Nome:</b> {{ $risco->nome }}</p>
            <p><b>Cor:</b> <span style="color: {{ $risco->cor }}">{{ $risco->cor }}</span></p>
        </div>

        <!-- Ações -->
        <div>
            <a href="{{ route('risco.index') }}">Voltar para a lista</a>
            <a href="{{ route('risco.edit', $risco->id) }}">Editar</a>
            <form action="{{ route('risco.destroy', $risco->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </div>
    </div>
</body>
</html>
