<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Status</title>
    <!-- Link para o Bootstrap (se não estiver usando o Laravel Mix) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Status Listagem</h1>
    
    <!-- Mensagem de sucesso após CRUD -->
    <div id="success-message" class="alert alert-success" style="display: none;">
        <!-- Mensagem de sucesso será exibida aqui -->
    </div>
    
    <!-- Link para criar novo Status -->
    <a href="/status/create" class="btn btn-primary mb-3">Criar Novo Status</a>
    
    <!-- Tabela com a listagem de Status -->
    <div class="table-responsive"> <!-- Torna a tabela responsiva -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody id="status-table">
                <!-- Aqui será preenchido dinamicamente com os dados dos status -->
            </tbody>
        </table>
    </div>
</div>

</body>
</html>