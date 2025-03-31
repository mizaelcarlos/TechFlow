<!-- resources/views/status/index.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Status Listagem</h1>
    
    <!-- Mensagem de sucesso -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <!-- Link para criar novo Status -->
    <a href="{{ route('status.create') }}" class="btn btn-primary mb-3">Criar Novo Status</a>
    
    <!-- Tabela com a listagem de Status -->
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($status as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->nome }}</td>
                    <td>
                        <a href="{{ route('status.edit', $s->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('status.destroy', $s->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
