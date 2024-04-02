<div class="table-responsive">
    <table class="table" id="companyInfos-table">
        <thead>
            <tr>
                <th>公司名稱</th>
                <th>公司地址</th>
                <th>公司 Map Url</th>
                <th>公司 Map Iframe 內嵌</th>
                <th>公司電話</th>
                <th>公司傳真</th>
                <th>公司 Facebook</th>
                <th>公司 Instagram</th>
                <th>公司 Line</th>
                <th>公司 Youtube</th>
                <th>公司 X</th>
                <th>公司統編</th>
                <th colspan="3">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companyInfos as $companyInfo)
                <tr>
                    <td>{{ $companyInfo->company_name }}</td>
                    <td>{{ $companyInfo->company_address }}</td>
                    <td>{{ $companyInfo->company_map_url }}</td>
                    <td>{{ $companyInfo->company_map_iframe }}</td>
                    <td>{{ $companyInfo->company_phone }}</td>
                    <td>{{ $companyInfo->company_fax }}</td>
                    <td>{{ $companyInfo->company_facebook }}</td>
                    <td>{{ $companyInfo->company_instagram }}</td>
                    <td>{{ $companyInfo->company_line }}</td>
                    <td>{{ $companyInfo->company_youtube }}</td>
                    <td>{{ $companyInfo->company_x }}</td>
                    <td>{{ $companyInfo->company_id_number }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.companyInfos.destroy', $companyInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.companyInfos.show', [$companyInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.companyInfos.edit', [$companyInfo->id]) }}"
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
