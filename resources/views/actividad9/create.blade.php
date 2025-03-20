@extends('layouts.app')

@section('content')
    <h1>Nuevo Registro</h1>
    
    <form action="{{ route('actividad9.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label>Descripción:</label>
            <textarea name="descripcion" class="form-control" rows="3" required></textarea>
        </div>
        
        <div class="form-group">
            <label>Foto:</label>
            <input type="file" name="foto" class="form-control-file" required>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    </form>
@endsection