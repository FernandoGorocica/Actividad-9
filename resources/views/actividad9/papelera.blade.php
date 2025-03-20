@extends('layouts.app')

@section('content')
    <h1>Registros Eliminados</h1>
    <a href="{{ route('actividad9.index') }}" class="btn btn-primary">Volver</a>

    @if ($registros->isEmpty())
        <div class="alert alert-info mt-4">La papelera está vacía.</div>
    @else
        <div class="row mt-4">
            @foreach ($registros as $registro)
                <div class="col-md-4 mb-4">
                    <!-- Tarjeta con datos del registro eliminado -->
                </div>
            @endforeach
        </div>
    @endif
@endsection