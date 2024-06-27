@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Aggiungi Nuovo Progetto</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Tipologia</label>
            <select class="form-control" id="type_id" name="type_id">
                <option value="">Seleziona Tipologia</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Tecnologie</label>
            @foreach($technologies as $technology)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="technology{{ $technology->id }}" name="technologies[]" value="{{ $technology->id }}" {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="technology{{ $technology->id }}">
                        {{ $technology->name }}
                    </label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection