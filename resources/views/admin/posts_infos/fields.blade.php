<!-- Post Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_title', '文章標題:') !!}
    {!! Form::text('post_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Content Field -->
<div class="form-group col-sm-12">
    {!! Form::label('post_content', '文章內容:') !!}
    {{-- {!! Form::text('post_content', null, ['class' => 'form-control']) !!} --}}
    {!! Form::textarea('post_content', null, ['class' => 'form-control', 'id' => 'contents', 'rows' => "20"]) !!}
</div>

<!-- Post Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_type', '文章分類:') !!}
    {!! Form::select('post_type', ['' => '請選擇'] + ($postsTypes ?? []), ['class' => 'form-control', 'required' => true]) !!}
</div>

<!-- Post Seo Setting Customize Field -->
<div class="form-group col-sm-12">
    {!! Form::label('post_seo_setting_customize', '文章自訂SEO', ['class' => 'form-check-label']) !!}
    <label class="form-check">
        {!! Form::radio('post_seo_setting_customize', true, null, ['class' => 'form-check-input', 'checked' => true]) !!} 開
    </label>

    <label class="form-check">
        {!! Form::radio('post_seo_setting_customize', false, null, ['class' => 'form-check-input']) !!} 關
    </label>

</div>

<div class="seo-setting row">
    <!-- Post Seo Title Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('post_seo_title', '文章SEO標題:') !!}
        {!! Form::text('post_seo_title', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Post Meta Title Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('post_meta_title', '文章 Meta Title:') !!}
        {!! Form::text('post_meta_title', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Post Meta Description Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('post_meta_description', '文章 Meta Description:') !!}
        {!! Form::text('post_meta_description', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Post Meta Keywords Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('post_meta_keywords', '文章 Meta Keywords:') !!}
        {!! Form::text('post_meta_keywords', null, ['class' => 'form-control']) !!}
    </div>
</div>



@push('third_party_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.tiny.cloud/1/1ugon3r0i7rnpx6jhdz4moygn9knxfai212wbqlixzr9hpi8/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script> --}}
    <script src="{{ assets('vendor/tinymce/js/tinymce.js') }}"></script>
@endpush
@push('page_scripts')
    <script src="{{ asset('js/post.js') }}" referrerpolicy="no-referrer"></script>
    <script>
        $(function(){
            $("input[name=post_seo_setting_customize]").change();
            $("input[name=post_seo_setting_customize]").change(function(){
                console.log($("input[name=post_seo_setting_customize]:checked").val());
                if ($("input[name=post_seo_setting_customize]:checked").val() == 1) {
                    // $("#post_seo_title").prop("readonly", false);
                    // $("#post_meta_title").prop("readonly", false);
                    // $("#post_meta_description").prop("readonly", false);
                    // $("#post_meta_keywords").prop("readonly", false);
                    $('.seo-setting').slideDown('1500');
                } else {
                    // $("#post_seo_title").prop("readonly", true);
                    // $("#post_meta_title").prop("readonly", true);
                    // $("#post_meta_description").prop("readonly", true);
                    // $("#post_meta_keywords").prop("readonly", true);
                    $('.seo-setting').slideUp('1500');
                }
            });
        });
    </script>
@endpush
