@extends('layouts.app')

@section('content')
    <h1>Registros Activos</h1>
    <a href="{{ route('actividad9.create') }}" class="btn btn-success">Nuevo Registro</a>
    <a href="{{ route('actividad9.papelera') }}" class="btn btn-warning">Papelera</a>

    @if ($registros->isEmpty())
        <div class="alert alert-info mt-4">No hay registros activos.</div>
    @else
        <div class="row mt-4">
            @foreach ($registros as $registro)
                <div class="col-md-4 mb-4">
                    <!-- Tarjeta con datos del registro -->
                </div>
            @endforeach
        </div>
    @endif
@endsection