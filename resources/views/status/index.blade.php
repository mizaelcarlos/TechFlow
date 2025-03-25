<!-- resources/views/status/index.blade.php -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status - Lista</title>
</head>
<body>
    <h1>Lista de Status</h1>
    <a href="{{ route('status.create') }}">Criar Novo Status</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($status as $statu)
                <tr>
                    <td>{{ $statu->nome }}</td>
                    <td style="background-color: {{ $statu->cor }}; color: orange;">{{ $statu->cor }}</td>
                    <td>
                        <a href="{{ route('status.show', $statu->id) }}">Ver</a>
                        <a href="{{ route('status.edit', $statu->id) }}">Editar</a>
                        <form action="{{ route('status.destroy', $statu->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza de que deseja deletar este Status?')">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
