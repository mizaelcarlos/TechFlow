<!-- resources/views/risco/index.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Riscos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Listagem de Riscos</h1>

    <!-- Mensagem de sucesso -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Link para criar novo Risco -->
    <a href="{{ route('risco.create') }}" class="mb-3 btn btn-primary">Criar Novo Risco</a>

    <!-- Tabela com a listagem de Riscos -->
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($riscos as $risco)
                    <tr>
                        <td>{{ $risco->id }}</td>
                        <td>{{ $risco->nome }}</td>
                        <td>{{ $risco->cor }}</td>
                        
                        <td>
                            <!-- Botões de ações -->
                            <a href="{{ route('risco.edit', $risco->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('risco.destroy', $risco->id) }}" method="POST" style="display:inline;">
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

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
