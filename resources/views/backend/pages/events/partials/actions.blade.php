<div class="form-button-action">
    <a href="{{ route('events.show', $event->id) }}" class="btn btn-link btn-info btn-lg" data-bs-toggle="tooltip" data-original-title="View">
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-link btn-primary btn-lg" data-bs-toggle="tooltip" data-original-title="Edit Task">
        <i class="fa fa-edit"></i>
    </a>
    <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-link btn-danger" data-bs-toggle="tooltip" data-original-title="Remove" onclick="return confirm('Are you sure you want to delete this module?');">
            <i class="fa fa-times"></i>
        </button>
    </form>
</div>
