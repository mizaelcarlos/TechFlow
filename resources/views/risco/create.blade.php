<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1>Criar Novo Risco</h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('risco.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="nome" class="form-label">Nome do Risco</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>

    <div class="mb-3">
        <label for="cor" class="form-label">Cor do Risco</label>
        <input type="color" class="form-control" id="cor" name="cor" required>
    </div>

    <button type="submit" class="btn btn-success">Salvar Risco</button>
    <a href="{{ route('risco.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
</div>


</body>
</html>