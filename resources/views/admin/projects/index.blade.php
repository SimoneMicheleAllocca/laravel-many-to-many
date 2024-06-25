@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Progetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>Slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            
                            <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-info btn-sm">Mostra</a>
                            
                            
                            <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-warning btn-sm">Modifica</a>
                            
                            
                            <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST" onsubmit="return confirm('Vuoi davvero eliminare questo progetto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection