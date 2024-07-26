<div class="btn-group" role="group" aria-label="Actions">
{{--    <a href="{{ route('modules.show', $module->id) }}" class="btn btn-success--}}
{{--    btn-sm">--}}
{{--        <i class="mdi mdi-eye"></i>--}}
{{--    </a>--}}
{{--    ||--}}
    <a href="{{ route('modules.edit', $module->id) }}" class="btn btn-info btn-sm">
        <i class="mdi mdi-table-edit"></i>
    </a>
    ||
    <form action="{{ route('modules.destroy', $module->id) }}" method="POST" id="delete-form-{{ $module->id }}" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger btn-sm delete-button" data-module-id="{{ $module->id }}">
            <i class="mdi mdi-trash-can"></i>
        </button>
    </form>
</div>
