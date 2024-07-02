<div class="table-responsive">
    <table class="table" id="pageSettingInfos-table">
        <thead>
            <tr>
                <th>網址</th>
                <th>標題</th>
                <th>Meta-Title</th>
                <th>Meta設定</th>
                <th>Banner</th>
                <th>Banner_Mobile</th>
                <th colspan="3">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pageSettingInfos as $pageSettingInfo)
                <tr>
                    <td>{{ $pageSettingInfo->url }}</td>
                    <td>{{ $pageSettingInfo->title }}</td>
                    <td>{{ $pageSettingInfo->meta_title }}</td>
                    <td>
                        <p>Meta描述：{{ $pageSettingInfo->meta_description }}</p>
                        <p>Meta關鍵字：{{ $pageSettingInfo->meta_keywords }}</p>
                        <p>MetaGoogleSiteVerification：{{ $pageSettingInfo->meta_google_site_verification }}</p>
                    </td>
                    <td style="max-width: 120px;">
                        <div class="slick">
                            @foreach ($pageSettingInfo->banner ?? [] as $i => $image)
                                <div>
                                    <a href="{{ env('APP_URLs', 'https://museebeaux.com'). '/uploads/' . $image }}" data-fancybox="gallery_{{ $pageSettingInfo->id }}">
                                        <img src="{{ env('APP_URLs', 'https://museebeaux.com'). '/uploads/' . $image }}" alt="{{ $pageSettingInfo->banner_alt[$i] }}" style="max-width: 120px;">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </td>
                    <td style="max-width: 120px;">
                        <div class="slick">
                            @foreach ($pageSettingInfo->banner_mob ?? [] as $i => $image)
                                <div>
                                    <a href="{{ env('APP_URLs', 'https://museebeaux.com'). '/uploads/' . $image }}" data-fancybox="gallery_mob_{{ $pageSettingInfo->id }}">
                                        <img src="{{ env('APP_URLs', 'https://museebeaux.com'). '/uploads/' . $image }}" alt="{{ $pageSettingInfo->banner_alt[$i] }}" style="max-width: 120px;">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </td>
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
