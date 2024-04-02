<div class="table-responsive">
    <table class="table" id="servicesInfos-table">
        <thead>
            <tr>
                <th>服務名稱</th>
                <th>服務項目 Icon</th>
                <th>服務項目 Icon Alt</th>
                <th>服務項目封面</th>
                <th>服務項目封面 Alt</th>
                <th>服務描述</th>
                <th>服務子項目</th>
                <th colspan="3">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicesInfos as $servicesInfo)
                <tr>
                    <td>{{ $servicesInfo->service_name }}</td>
                    <td>{{ $servicesInfo->service_icon }}</td>
                    <td>{{ $servicesInfo->service_icon_alt }}</td>
                    <td>{{ $servicesInfo->service_cover_front }}</td>
                    <td>{{ $servicesInfo->service_cover_front_alt }}</td>
                    <td>{{ $servicesInfo->service_description }}</td>
                    <td>{{ $servicesInfo->service_sub_list }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.servicesInfos.destroy', $servicesInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.servicesInfos.show', [$servicesInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.servicesInfos.edit', [$servicesInfo->id]) }}"
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
