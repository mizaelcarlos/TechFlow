<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Setores</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Listagem de Setores</h1>

    <a href="{{ route('setor.create') }}" class="mb-3 btn btn-primary">Criar Novo Setor</a>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($setores as $setor)
                    <tr>
                        <td>{{ $setor->id }}</td>
                        <td>{{ $setor->nome }}</td>
                        <td class="text-center">
                            <a href="{{ route('setor.edit', $setor->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('setor.destroy', $setor->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                <a href="{{ route('setor.show', ['id' => $setor->id]) }}" class="btn btn-primary">Visualizar</a>

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
