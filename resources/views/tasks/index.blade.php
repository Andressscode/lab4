@extends('layouts.prueba')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@section('content')
<h1>Lista de tareas</h1>
<a href="/tasks/create">Crear</a>

<div class="table-responsive">
    <table class="table text-left">
        <thead>
            <tr>
                <th style="width: 5%">ID</th>
                <th style="width: 22%;">Nombre</th>
                <th style="width: 22%;">Completada</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $tareas)
            <tr>
                <th scope="row" class="text-start">{{ $tareas->id }}</th>

                <td>
                    <a href="/tasks/{{ $tareas->id }}">{{ $tareas->name }}</a>
                </td>


                <td>
                <span @class([
           'text-success' => $tareas->completed,
            'text-warning' => !$tareas->completed
               ])>
    {{ $tareas->completed ? 'Completado' : 'Pendiente' }}
</span>


                <td>
                    <form action="/tasks/{{ $tareas->id }}/completar" method="POST" style="display:inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-warning">Completar</button>
                    </form>

                </td>
            </tr>

            @endforeach

        </tbody>


    </table>
</div>
@endsection