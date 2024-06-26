@extends('layouts.prueba');
@section('content') 



<div class="alert alert-primary" role="alert">
<h1 >Tarea ID: {{ $task->id }}</h1>
<h2 class="form-control">Nombre: {{ $task->name }}</h2>
<p class="form-control">Descripcion: {{ $task->description }}</p>
<a href="/tasks/{{ $task->id }}/edit">Editar</a>
<a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $task->id }}').submit();">Eliminar</a>

<form id="delete-form-{{ $task->id }}" action="{{ url('/tasks/' . $task->id . '/delete') }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
    
</form>
</div>

@endsection