@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Actividad</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('activities.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select name="type" id="type" class="form-control" required>
                <option value="">Selecciona un tipo</option>
                <option value="surf">Surf</option>
                <option value="windsurf">Windsurf</option>
                <option value="kayak">Kayak</option>
                <option value="atv">ATV</option>
                <option value="hot air balloon">Hot Air Balloon</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Usuario</label>
            <input type="number" name="user_id" id="user_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="date_time" class="form-label">Fecha y Hora</label>
            <input type="datetime-local" name="date_time" id="date_time" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="paid" class="form-label">Pagado</label>
            <select name="paid" id="paid" class="form-control" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="notes" class="form-label">Notas</label>
            <input type="text" name="notes" id="notes" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="satisfaction" class="form-label">Satisfacción (1-10)</label>
            <input type="number" name="satisfaction" id="satisfaction" class="form-control" min="1" max="10">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection