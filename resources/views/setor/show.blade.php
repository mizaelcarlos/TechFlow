<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Setor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Detalhes do Setor</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $setor->id }}</h5>
            <p class="card-text"><strong>Nome:</strong> {{ $setor->nome }}</p>

            <a href="{{ route('setor.index') }}" class="btn btn-secondary">Voltar</a>
            <a href="{{ route('setor.edit', $setor->id) }}" class="btn btn-warning">Editar</a>

            <form action="{{ route('setor.destroy', $setor->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
