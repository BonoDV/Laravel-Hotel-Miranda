<form action="{{ route('activities.destroy', ['user_id' => $activity->user_id, 'date_time' => $activity->date_time]) }}"
    method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar</button>
</form>