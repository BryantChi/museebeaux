<div class="table-responsive">
    <table class="table" id="postTypeInfos-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>分類名稱</th>
            <th colspan="3">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($postTypeInfos as $postTypeInfo)
            <tr>
                <td>{{ $postTypeInfo->id }}</td>
                <td>{{ $postTypeInfo->type_name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admin.postTypeInfos.destroy', $postTypeInfo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.postTypeInfos.show', [$postTypeInfo->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.postTypeInfos.edit', [$postTypeInfo->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @if (Auth::user()->id == 1)
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'button', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return check(this)"]) !!}
                        @endif
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
