{{-- @if (Auth::guard('admin')->user()->hasPermissionTo('zone.update')) --}}
<a href="javascript:;" id="content_management" data-url="{{ route('admin.epostu-pricing-plan.edit', $model->id) }}" class="btn btn-round btn-info" data-bs-toggle="tooltip" data-bs-placement="Top" title="Edit">
    <i class="feather icon-edit"></i>
</a>
{{-- @endif --}}

{{-- @if (Auth::guard('admin')->user()->hasPermissionTo('zone.delete')) --}}
<a href="javascript:;" id="delete_item" data-id ="{{ $model->id }}" data-url="{{ route('admin.epostu-pricing-plan.destroy',$model->id) }}" class="btn btn-round btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
    <i class="feather icon-trash-2"></i>
</a>
{{-- @endif --}}