@extends('layouts.prueba')
@section('content') 
<h1>Creando una tarea</h1>
<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="/tasks" method="POST">
    @csrf

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <label for="name" class="form-label">Nombre</label>
        <input type="form-control form-control-lg"class="form-control" name="name" id="name">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control"  name="description" id="description" cols="30" rows="5"></textarea>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <button type="submit">Crear tarea</button>
</form>
</div>
@endsection


