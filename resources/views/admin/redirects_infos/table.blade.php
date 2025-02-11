<div class="table-responsive">
    <table class="table" id="redirectsInfos-table">
        <thead>
            <tr>
                <th>Old Url</th>
                <th>New Url</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($redirectsInfos as $redirectsInfo)
                <tr>
                    <td>{{ $redirectsInfo->old_url }}</td>
                    <td>{{ $redirectsInfo->new_url }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.redirectsInfos.destroy', $redirectsInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.redirectsInfos.show', [$redirectsInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.redirectsInfos.edit', [$redirectsInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'button',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return check(this)",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
