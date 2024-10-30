{{-- @if (Auth::guard('admin')->user()->hasPermissionTo('zone.update')) --}}
<a href="{{ route('admin.knowledge-base.edit', $model->id) }}" class="btn btn-round btn-info" data-bs-toggle="tooltip" data-bs-placement="Top" title="Edit">
    <i class="feather icon-edit"></i>
</a>
{{-- @endif --}}

{{-- @if (Auth::guard('admin')->user()->hasPermissionTo('zone.delete')) --}}
<a href="javascript:;" id="delete_item" data-id ="{{ $model->id }}" data-url="{{ route('admin.knowledge-base.destroy',$model->id) }}" class="btn btn-round btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
    <i class="feather icon-trash-2"></i>
</a>
{{-- @endif --}}