@extends('layouts.app') <!-- Aqui você pode substituir por seu layout principal -->

@section('content')
<div class="container">
    <h1>Criar Novo Status</h1>

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
    <form action="{{ route('status.store') }}" method="POST">
        @csrf <!-- Token CSRF para segurança -->
        
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Status</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
        </div>
        
        <button type="submit" class="btn btn-success">Salvar Status</button>
        <a href="{{ route('status.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
