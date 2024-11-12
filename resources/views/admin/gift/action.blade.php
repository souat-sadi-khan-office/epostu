<a href="{{ route('admin.gift-item.show', $model->id) }}" class="btn btn-round btn-warning" data-bs-toggle="tooltip" data-bs-placement="Top" title="Edit">
    <i class="feather icon-eye"></i>
</a>
<a href="{{ route('admin.gift-item.edit', $model->id) }}" class="btn btn-round btn-info" data-bs-toggle="tooltip" data-bs-placement="Top" title="Edit">
    <i class="feather icon-edit"></i>
</a>
<a href="javascript:;" id="delete_item" data-id ="{{ $model->id }}" data-url="{{ route('admin.gift-item.destroy',$model->id) }}" class="btn btn-round btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
    <i class="feather icon-trash-2"></i>
</a>