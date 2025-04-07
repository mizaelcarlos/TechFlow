<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Chamados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
@keyframes tremer {
    0% {
        transform: translateX(0) rotate(0deg);
    }

    25% {
        transform: translateX(-5px) rotate(3deg);
    }

    50% {
        transform: translateX(5px) rotate(-3deg); 
    }

    75% {
        transform: translateX(-5px) rotate(3deg); 
    }

    100% {
        transform: translateX(5px) rotate(0deg);
    }
}

.tremer {
    animation: tremer 1s ease-in-out infinite;
}
</style>

</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-5">Lista de Chamados</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach ($chamados as $chamado)
                <div class="col">
                    <div class="card h-100 d-flex flex-column" id="card-{{$chamado->id}}">
                        @if ($chamado->status)
                            <div class="status-id" data-status-id="{{ $chamado->status->id }}" style="display:none;"></div>
                        @else
                            <div class="status-id" data-status-id="0" style="display:none;"></div>
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-4">{{ $chamado->titulo }}</h5>
                            <p class="card-text">{{ $chamado->descricao }}</p>
                            <button class="btn btn-outline-primary mt-auto">Adicionar</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.card').each(function() {
                var statusId = $(this).find('.status-id').data('status-id');
                if (statusId % 2 === 0) {
                    $(this).addClass('tremer');
                }
            });

        });
    </script>

</body>

</html>
