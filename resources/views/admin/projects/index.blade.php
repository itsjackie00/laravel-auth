<!-- resources/views/admin/projects/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Progetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">Vedi</a>
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection