<div class="btn-group" role="group" aria-label="Actions">
    <a href="{{ route('modules.show', $module->id) }}" class="btn btn-info btn-sm" title="View">
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('modules.edit', $module->id) }}" class="btn btn-info btn-sm" title="Edit">
        <i class="fa fa-edit"></i>
    </a>
    <form action="{{ route('modules.destroy', $module->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this module?');">
            <i class="fa fa-trash"></i>
        </button>
    </form>
</div>
