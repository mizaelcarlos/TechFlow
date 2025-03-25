<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>editar</h1>
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
     <form action="{{ route('status.update', $status->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <div class="mb-3">
            <label for="title"class="form-label">titulo</label>
            <input type="text" name="title" id="title" class="form-control">
</div>
        <div class="mb-3">
            <label for="description" class="form-label">conteudo</label>
            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('status.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
        </div>
        @endsection
=======
@extends('layouts.app') <!-- Aqui você pode substituir por seu layout principal -->

@section('content')
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

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Status</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
        </div>

        <div class="mb-3">
            <label for="cor" class="form-label">Nome da cor</label>
            <input type="text" class="form-control" id="cor" name="cor" value="{{ old('cor') }}" required>
        </div>


        <button type="submit" class="btn btn-success">Salvar Status</button>
        <a href="{{ route('status.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
>>>>>>> origin/crud_status_edit
