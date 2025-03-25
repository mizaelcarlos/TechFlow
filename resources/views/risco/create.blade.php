@extends('layouts.app')

@section('content')
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

    <form action="{{ route('riscos.store') }}" method="POST">
        @csrf 
        
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Risco</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
        </div>

        <div class="mb-3">
            <label for="cor" class="form-label">Cor do Risco</label>
            <input type="text" class="form-control" id="cor" name="cor" value="{{ old('cor') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar Risco</button>
        <a href="{{ route('riscos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
