<a href="javascript:;" id="content_management" data-url="{{ route('admin.report.order.show',$model->id) }}" class="btn btn-round btn-success" data-toggle="tooltip" data-placement="top" title="View">
    <i class="feather icon-eye"></i>
</a>

<a href="javascript:;" id="content_management" data-url="{{ route('admin.report.order.edit',$model->id) }}" class="btn btn-round btn-primary" data-toggle="tooltip" data-placement="top" title="Edit">
    <i class="feather icon-edit"></i>
</a>

<a href="javascript:;" id="delete_item" data-id ="{{ $model->id }}" data-url="{{ route('admin.report.order.destroy',$model->id) }}" class="btn btn-round btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
    <i class="feather icon-trash-2"></i>
</a>