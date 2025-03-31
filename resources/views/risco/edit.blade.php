<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Risco</title>
</head>
<body>

<div class="container mt-5">
    <h1>Editar Risco</h1>

    <!-- Mensagem de erro se houver -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulário de edição de Risco -->
    <form action="{{ route('risco.update', $risco->id) }}" method="POST">
        @csrf <!-- Token CSRF para segurança -->
        @method('PUT') <!-- Método PUT para indicar que estamos atualizando um registro -->

        <!-- Campo para Nome -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Risco</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ ($risco->nome) }}" required>
        </div>

        <!-- Campo para Cor -->
        <div class="mb-3">
            <label for="cor" class="form-label">Cor do Risco</label>
            <input type="color" class="form-control" id="cor" name="cor" value="{{ ($risco->cor) }}" required>
        </div>

        <!-- Botões -->
        <button type="submit" class="btn btn-success">Salvar Risco</button>
        <a href="{{ route('risco.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

</body>
</html>
