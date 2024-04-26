<div class="table-responsive">
    <table class="table" id="postTypeInfos-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>分類自訂網址</th>
            <th>分類名稱</th>
            <th colspan="3">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($postTypeInfos as $postTypeInfo)
            <tr>
                <td>{{ $postTypeInfo->id }}</td>
                <td>{{ $postTypeInfo->type_slug ?? null }}</td>
                <td>{!! $postTypeInfo->type_name !!}</td>
                {{-- <td>{{ DB::table('post_type_infos')->whereNull('deleted_at')->where('id', $postTypeInfo->type_parent_id)->value('type_name') }}</td> --}}
                <td width="120">
                    {!! Form::open(['route' => ['admin.postTypeInfos.destroy', $postTypeInfo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.postTypeInfos.show', [$postTypeInfo->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        @if (($postTypeInfo->id > 2 && $postTypeInfo->type_parent_id > 2))
                        <a href="{{ route('admin.postTypeInfos.edit', [$postTypeInfo->id]) }}" data-pid="{{ $postTypeInfo->type_parent_id }}"
                            class='btn btn-default btn-xs'>
                             <i class="far fa-edit"></i>
                         </a>
                        @elseif (Auth::user()->id == 1)
                        <a href="{{ route('admin.postTypeInfos.edit', [$postTypeInfo->id]) }}" data-pid="{{ $postTypeInfo->type_parent_id }}"
                            class='btn btn-default btn-xs'>
                             <i class="far fa-edit"></i>
                         </a>
                        @endif

                        @if ($postTypeInfo->id > 3)
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'button', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return check(this)"]) !!}
                        @elseif (Auth::user()->id == 1)
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
