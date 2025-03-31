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
    <h1>Editar Status</h1>

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

    <!-- Formulário de criação de Status -->
    <form action="{{ route('status.update', $status->id) }}" method="POST">
        @csrf <!-- Token CSRF para segurança -->
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Status</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ ($status->nome)}}" required>
        </div>

        <div class="mb-3">
            <label for="cor" class="form-label">Nome da cor</label>
            <input type="color" class="form-control" id="cor" name="cor" value="{{ ($status->cor) }}" required>
        </div>


        <button type="submit" class="btn btn-success">Salvar Status</button>
        <a href="{{ route('status.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>



</body>
</html>