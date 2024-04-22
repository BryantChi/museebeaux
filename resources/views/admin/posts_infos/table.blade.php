<div class="table-responsive">
    <table class="table" id="postsInfos-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>文章封面</th>
                <th>文章標題</th>
                <th>文章自訂網址</th>
                {{-- <th>文章內容</th> --}}
                <th>文章分類</th>
                {{-- <th>文章自訂SEO狀態</th> --}}
                {{-- <th>文章SEO標題</th>
                <th>文章 Meta Title</th>
                <th>文章 Meta Description</th>
                <th>文章 Meta Keywords</th> --}}
                <th>建立時間</th>
                <th width="120">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postsInfos as $postsInfo)
                <tr>
                    <td>{{ $postsInfo->id }}</td>
                    <td>
                        @if ($postsInfo->post_front_cover)
                        <a href="{{ env('APP_URL', 'https://museebeaux.powerchi.com.tw'). '/uploads/' . $postsInfo->post_front_cover }}" data-fancybox>
                            <img src="{{ env('APP_URL', 'https://museebeaux.powerchi.com.tw'). '/uploads/' . $postsInfo->post_front_cover }}" class="img-fluid" style="max-width: 200px;" alt="">
                        </a>
                        @endif
                    </td>
                    <td>{{ $postsInfo->post_title }}</td>
                    <td>{{ $postsInfo->post_slug }}</td>
                    {{-- <td>
                        <div class="multiline-ellipsis">{!! $postsInfo->post_content !!}</div>
                    </td> --}}
                    <td>{{ DB::table('post_type_infos')->where('id', $postsInfo->post_type)->value('type_name') }}</td>
                    {{-- <td>{{ $postsInfo->post_seo_setting_customize ? '是' : '否' }}</td> --}}
                    {{-- <td>{{ $postsInfo->post_seo_title }}</td>
                    <td>{{ $postsInfo->post_meta_title }}</td>
                    <td>
                        <div class="multiline-ellipsis">{!! $postsInfo->post_meta_description !!}</div>
                    </td>
                    <td>{{ $postsInfo->post_meta_keywords }}</td> --}}
                    <td>{{ \Carbon\Carbon::parse($postsInfo->created_at)->format('Y-m-d H:i:s') }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.postsInfos.destroy', $postsInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.postsInfos.show', [$postsInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.postsInfos.edit', [$postsInfo->id]) }}"
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
