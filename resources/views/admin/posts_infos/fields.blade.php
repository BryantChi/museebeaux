<!-- Post Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_title', '文章標題:') !!}
    {!! Form::text('post_title', null, ['class' => 'form-control']) !!}
</div>
<div class="col-12"></div>
<!-- Post Front Cover Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_front_cover', '文章封面:') !!}
    <span class="text-secondary">＊圖片建議尺寸比例為16:9，長方形橫式</span>

    <div class="custom-file">
        {{-- {!! Form::file('post_front_cover', null, ['class' => 'custom-file-input post_front_cover', 'required' => true]) !!} --}}
        <?php
        if (Request::is('admin/postsInfos/create')) {
            $required = 'required';
        } else {
            $required = '';
        }
        ?>
        <input type="file" class="custom-file-input post_front_cover" id="post_front_cover" name="post_front_cover"
            accept="image/*" {{ $required }}>
        <label class="custom-file-label" for="post_front_cover">Choose file</label>
    </div>
    <div class="img-preview mt-2">
        <p for="">預覽</p>
        @if ($postsInfo->post_front_cover ?? null)
            <img src="{{ env('APP_URL', 'https://museebeaux.com') . '/uploads/' . $postsInfo->post_front_cover }}"
                style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>

<!-- Post Front Cover Alt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_front_cover_alt', '文章封面 Alt:') !!}
    {!! Form::text('post_front_cover_alt', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Content Field -->
<div class="form-group col-sm-12">
    {!! Form::label('post_content', '文章內容:') !!}
    {{-- {!! Form::text('post_content', null, ['class' => 'form-control']) !!} --}}
    {!! Form::textarea('post_content', null, ['class' => 'form-control', 'id' => 'contents', 'rows' => '20']) !!}
</div>

<!-- Post Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_type', '文章分類:') !!}
    {!! Form::select('post_type', ['' => '請選擇'] + ($postsTypes ?? []), $postsInfo->post_type ?? 1, [
        'class' => 'form-control',
        'required' => true,
    ]) !!}
</div>
<div class="col-12"></div>
<!-- Post Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_slug', '文章自訂網址:') !!}
    {!! Form::text('post_slug', null, ['class' => 'form-control', 'required' => true]) !!}
</div>

<!-- Post Seo Setting Customize Field -->
<div class="form-group col-sm-12">
    {!! Form::label('post_seo_setting_customize', '文章自訂SEO:', ['class' => 'form-check-label2 w-100 mb-2']) !!}
    {{-- <label class="form-check">
        {!! Form::radio('post_seo_setting_customize', true, null, ['class' => 'form-check-input', 'checked' => true]) !!} 開
    </label>

    <label class="form-check">
        {!! Form::radio('post_seo_setting_customize', false, null, ['class' => 'form-check-input']) !!} 關
    </label> --}}

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="post_seo_setting_customize" id="post_seo_setting_customize_true" value="1" {{ ($postsInfo->post_seo_setting_customize ?? true) ? 'checked' : '' }}>
        <label class="form-check-label" for="post_seo_setting_customize">開</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="post_seo_setting_customize" id="post_seo_setting_customize_false" value="0"  {{ ($postsInfo->post_seo_setting_customize ?? false) ? '' : 'checked' }}>
        <label class="form-check-label" for="post_seo_setting_customize">關</label>
    </div>

</div>

<div class="seo-setting row">

    {{-- <!-- Post Seo Title Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('post_seo_title', '文章SEO標題:') !!}
        {!! Form::text('post_seo_title', null, ['class' => 'form-control']) !!}
    </div> --}}

    <!-- Post Meta Title Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('post_meta_title', '文章 Meta Title:') !!}
        {!! Form::text('post_meta_title', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Post Meta Keywords Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('post_meta_keywords', '文章 Meta Keywords:') !!}
        {!! Form::text('post_meta_keywords', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Post Meta Description Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('post_meta_description', '文章 Meta Description:') !!}
        {!! Form::textarea('post_meta_description', null, ['class' => 'form-control', 'rows' => '8']) !!}
    </div>


</div>

<!-- Create At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', '建立時間:') !!}
    {!! Form::datetimelocal('created_at', $postsInfo->created_at ?? \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    {{-- <input type="datetime-local" class="form-control" name="created_at" id="created_at" value="{{ $postsInfo->created_at ?? \Carbon\Carbon::now() }}"> --}}
</div>


@push('third_party_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.tiny.cloud/1/1ugon3r0i7rnpx6jhdz4moygn9knxfai212wbqlixzr9hpi8/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script> --}}
    <script src="{!! asset('vendor/tinymce/js/tinymce/tinymce.js') !!}"></script>
@endpush
@push('page_scripts')
    <script src="{{ asset('js/post.js') }}" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            checkSeoSetting();
            $("input[name=post_seo_setting_customize]").change(function() {
                // console.log($("input[name=post_seo_setting_customize]:checked").val());
                checkSeoSetting();
            });

            $(document).on('change', '.post_front_cover', function() {
                let fileInput = this;
                let fileReader = new FileReader();

                fileReader.onload = function(e) {
                    let previewHtml =
                        `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                    $(fileInput).closest('.form-group').find('.img-preview').html(previewHtml);
                };

                fileReader.readAsDataURL(fileInput.files[0]);
            });
        });

        function checkSeoSetting() {
            if ($("input[name=post_seo_setting_customize]:checked").val() == 1) {
                $('.seo-setting').slideDown('1500');
            } else {
                $('.seo-setting').slideUp('1500');
            }
        }
    </script>
@endpush
