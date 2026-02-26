<div class="table-responsive p-3">
    <div class="d-flex justify-content-between">
        <a href="{{ route('admin.postsInfos.index') }}" class="btn btn-outline-secondary mb-3">重新整理</a>
        <div class="form-group row justify-content-end align-content-center">
            {!! Form::label('post_type', '文章分類篩選 ', ['class' => 'col-auto mb-0 col-form-label']) !!}
            <div class="col-auto" style="min-width: 160px;">
                {!! Form::select('post_type', ['' => '請選擇'] + (DB::table('post_type_infos')->whereNull('deleted_at')->where('type_parent_id', null)->orderBy('type_name')->pluck('type_name', 'id')->toArray() ?? []), request()->get('post_type') ?? null, [
    'class' => 'form-control',
    'onchange' => 'fetchPostsInfos(this.value)'
]) !!}
            </div>
        </div>
    </div>

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
        </tbody>
    </table>
</div>
@push('page_scripts')
    <script>
        function fetchPostsInfos(value) {
            var table = $('#postsInfos-table').DataTable();
            table.ajax.url("{{ route('admin.postsInfos.datatable') }}?post_type=" + value).load();
        }
    </script>
@endpush