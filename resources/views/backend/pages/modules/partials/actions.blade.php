<div class="form-button-action">
    <a href="{{ route('modules.show', $module->id) }}" class="btn btn-link btn-info btn-lg" data-bs-toggle="tooltip" data-original-title="View">
        <i class="fa fa-eye"></i>
    </a>
   
   
{{--    <a href="{{ route('modules.edit', $module->id) }}" class="btn btn-link btn-primary btn-lg" data-bs-toggle="tooltip" data-original-title="Edit Task">--}}
{{--        <i class="fa fa-edit"></i>--}}
{{--    </a>--}}
    
    <a href="#" class="btn btn-link btn-primary btn-lg edit-button" data-bs-toggle="tooltip" data-module-id="{{ $module->id }}" data-original-title="Edit">
        <i class="fa fa-edit"></i>
    </a>
    
    
    
    
    <form id="delete-form-{{ $module->id }}" action="{{ route('modules.destroy', $module->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-link btn-danger delete-button" data-bs-toggle="tooltip" data-original-title="Remove" data-module-id="{{ $module->id }}">
            <i class="fa fa-times"></i>
        </button>
    </form>
</div>
