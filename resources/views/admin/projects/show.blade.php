@extends('layouts.admin')

@section('content')
<h1>{{ $project->title }}</h1>
<p>{{ $project->description }}</p>

@if ($technologies->count() > 0)
    <h3>Tecnologie utilizzate:</h3>
    <ul>
        @foreach ($technologies as $technology)
            <li>{{ $technology->name }}</li>
        @endforeach
    </ul>
@endif
@endsection