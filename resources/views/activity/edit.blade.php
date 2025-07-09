{{-- filepath: resources/views/activity/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Actividad</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form
        action="{{ route('activities.update', ['user_id' => $activity->user_id, 'date_time' => $activity->date_time]) }}"
        method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select name="type" id="type" class="form-control" required>
                <option value="">Selecciona un tipo</option>
                <option value="surf" {{ $activity->type == 'surf' ? 'selected' : '' }}>Surf</option>
                <option value="windsurf" {{ $activity->type == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
                <option value="kayak" {{ $activity->type == 'kayak' ? 'selected' : '' }}>Kayak</option>
                <option value="atv" {{ $activity->type == 'atv' ? 'selected' : '' }}>ATV</option>
                <option value="hot air balloon" {{ $activity->type == 'hot air balloon' ? 'selected' : '' }}>Hot Air
                    Balloon</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Usuario</label>
            <input type="number" name="user_id" id="user_id" class="form-control" value="{{ $activity->user_id }}"
                required readonly>
        </div>

        <div class="mb-3">
            <label for="date_time" class="form-label">Fecha y Hora</label>
            <input type="datetime-local" name="date_time" id="date_time" class="form-control"
                value="{{ \Carbon\Carbon::parse($activity->date_time)->format('Y-m-d\TH:i') }}" required readonly>
        </div>

        <div class="mb-3">
            <label for="paid" class="form-label">Pagado</label>
            <select name="paid" id="paid" class="form-control" required>
                <option value="1" {{ $activity->paid ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ !$activity->paid ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="notes" class="form-label">Notas</label>
            <textarea name="notes" id="notes" class="form-control" rows="3">{{ $activity->notes }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Actividad</button>
    </form>

    <div class="mt-4">
        <a href="{{ route('activities.index') }}" class="btn btn-secondary">Volver al listado</a>
    </div>
</div>
@endsection
