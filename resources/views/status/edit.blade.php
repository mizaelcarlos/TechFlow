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