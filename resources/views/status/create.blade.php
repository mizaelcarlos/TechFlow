<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Criar Novo Status</h1>

        <!-- Mensagem de erro se houver -->
        <div class="alert alert-danger" id="error-message" style="display: none;">
            <ul id="error-list"></ul>
        </div>

        <!-- Formulário de criação de Status -->
        <form action="{{route('status.store')}}" method="POST" id="status-form">
            <!-- Campo para CSRF Token (adicionar manualmente ou por meio de backend) -->
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Status</label>
                <input type="text" class="form-control" id="nome" name="nome"  required>

                
            </div>

            <div class="mb-3">
                <label for="cor" class="form-label">Cor</label>
                <input type="color" class="form-control" id="cor" name="cor"  required>
            </div>

            <button type="submit" class="btn btn-success">Salvar Status</button>
            <a href="/status" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</body>
</html>
