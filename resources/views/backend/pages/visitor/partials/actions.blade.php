<div class="btn-group" role="group" aria-label="Actions">
{{--    <a href="{{ route('visitor.show', $visitor->id) }}" class="btn btn-info btn-sm" title="View">--}}
        <a href="" class="btn btn-smoke btn-sm" title="View">
        <i class="mdi mdi-eye"></i>
    </a>||
{{--    <a href="{{ route('visitor.edit', $visitor->id) }}" class="btn btn-warning btn-sm" title="Edit">--}}
        <a href="" class="btn btn-info btn-sm" title="Edit">
            <i class="mdi mdi-table-edit"></i>
    </a>||
    <form action="" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn  btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this visitor?');">
            <i class="mdi mdi-trash-can"></i>
        </button>
    </form>
</div>
