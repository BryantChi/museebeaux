<div class="table-responsive">
    <table class="table" id="pageSettingInfos-table">
        <thead>
            <tr>
                <th>網址</th>
                <th>標題</th>
                <th>Meta-Title</th>
                <th>Meta-Description</th>
                <th>Meta-Keywords</th>
                <th>Meta-Google-Site-Verification</th>
                <th colspan="3">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pageSettingInfos as $pageSettingInfo)
                <tr>
                    <td>{{ $pageSettingInfo->url }}</td>
                    <td>{{ $pageSettingInfo->title }}</td>
                    <td>{{ $pageSettingInfo->meta_title }}</td>
                    <td>{{ $pageSettingInfo->meta_description }}</td>
                    <td>{{ $pageSettingInfo->meta_keywords }}</td>
                    <td>{{ $pageSettingInfo->meta_google_site_verification }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.pageSettingInfos.destroy', $pageSettingInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.pageSettingInfos.show', [$pageSettingInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.pageSettingInfos.edit', [$pageSettingInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            @if (Auth::user()->id == 1)
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'button',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return check(this)",
                            ]) !!}
                            @endif
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
