<div class="table-responsive">
    <table class="table" id="teamInfos-table">
        <thead>
            <tr>
                <th>姓名</th>
                <th>角色</th>
                <th>介紹</th>
                <th>學歷</th>
                <th>專長</th>
                <th>證照/資格</th>
                <th colspan="3">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teamInfos as $teamInfo)
                <tr>
                    <td>{{ $teamInfo->name }}</td>
                    <td>{{ $teamInfo->role }}</td>
                    <td>{{ $teamInfo->introduce }}</td>
                    <td>{{ $teamInfo->degree }}</td>
                    <td>{{ $teamInfo->expertise }}</td>
                    <td>{{ $teamInfo->certificate_license }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.teamInfos.destroy', $teamInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.teamInfos.show', [$teamInfo->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.teamInfos.edit', [$teamInfo->id]) }}"
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
