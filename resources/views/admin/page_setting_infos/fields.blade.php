<!-- Url Field -->
<div class="form-group col-sm-6">
    <div class="d-flex">
        {!! Form::label('url', '網址:') !!} <span class="text-danger ml-auto">* 必填</span>
    </div>
    {!! Form::text('url', null, ['class' => 'form-control', 'required' => true, 'readonly' => Request::is('admin/pageSettingInfos/*/edit*')]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <div class="d-flex">
        {!! Form::label('title', '標題:') !!} <span class="text-danger ml-auto">* 必填</span>
    </div>
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => true]) !!}
</div>

<!-- Meta-Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_title', 'Meta-Title:') !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta-Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_description', 'Meta-Description:') !!}
    {!! Form::text('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta-Keywords Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_keywords', 'Meta-Keywords:') !!}
    {!! Form::text('meta_keywords', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta-Google-Site-Verification Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_google_site_verification', 'Meta-Google-Site-Verification:') !!}
    {!! Form::text('meta_google_site_verification', null, ['class' => 'form-control']) !!}
</div>

<!-- Header-Anlytics-Code Field -->
<div class="form-group col-sm-8">
    {!! Form::label('header_anlytics_code', 'Header分析碼:') !!}
    {!! Form::textarea('header_anlytics_code', null, ['class' => 'form-control', 'rows' => 10]) !!}
</div>

<!-- Banner Field -->

<div class="form-group col-sm-12">
    {!! Form::label('banner', '輪播圖片:') !!}
    <div id="dynamicField">
        @foreach ($pageSettingInfo->banner ?? [] as $i => $banner)
        <div class="mt-2 field-group card p-4 bg-light-subtle">
            <input type="text" name="banner_input[]" class="form-control d-none" id="banner" value="{{ $banner }}">
            <input type="text" name="banner_mob_input[]" class="form-control d-none" id="banner" value="{{ $pageSettingInfo->banner_mob[$i] ?? '' }}">
            <div class="custom-file">
                <input type="file" class="custom-file-input banner_pc" id="banner" name="banner[]" accept="image/*" >
                <label class="custom-file-label" for="banner">Choose PC Image</label>
            </div>
            <div class="custom-file mt-2">
                <input type="file" class="custom-file-input banner_mob" id="banner_mob" name="banner_mob[]" accept="image/*" >
                <label class="custom-file-label" for="banner">Choose Mobile Image</label>
            </div>
            <input type="text" name="banner_alt[]" class="form-control my-2" id="banner_alt" value="{{ $pageSettingInfo->banner_alt[$i] }}">
            <input type="text" name="banner_link[]" class="form-control" id="banner_link" value="{{ $pageSettingInfo->banner_link[$i] }}">
            <div class="img-preview mt-2">
                <p for="">PC</p>
                <img src="{{ env('APP_URLs', 'https://beauty4u-clinic.com'). '/uploads/' . $banner }}" style="max-width: 200px; max-height: 200px;">
            </div>
            <div class="img-preview-mob mt-2">
                <p for="">Mobile</p>
                <img src="{{ env('APP_URLs', 'https://beauty4u-clinic.com'). '/uploads/' . ($pageSettingInfo->banner_mob[$i] ?? '') }}"
                class="{{ ($pageSettingInfo->banner_mob[$i] ?? '') ? 'd-block' : 'd-none' }}" style="max-width: 200px; max-height: 200px;">
            </div>

            <span class="btn btn-danger mt-2 removeButton d-flex ml-auto" style="width: max-content;"><i class="fas fa-minus"></i></span>
        </div>
        @endforeach
        {{--  --}}
    </div>
    <div class="d-flex justify-content-end w-100">
        <span class="btn btn-primary my-1" id="addBtn"><i class="fas fa-plus"></i></span>
    </div>
</div>
{{-- @push('third_party_stylesheets')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush
@push('third_party_scripts')
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endpush --}}
@push('page_scripts')
    <script>

        $(document).ready(function () {
            // $( "#dynamicField" ).sortable();
            // $( "#dynamicField" ).disableSelection();
            let count = {{ $pageSettingInfo->banner ?? [] ? count($pageSettingInfo->banner) : 0 }};
            $("#addBtn").click(function() {
                if (count >= 10) {
                    Swal.fire('注意！', '最多10張圖片', 'warning');
                    return;
                }
                // 動態添加一組輸入欄位
                $("#dynamicField").append('<div class="mt-2 field-group card p-4 bg-light-subtle">' +
                    // '<span class="btn btn-primary my-2" style="cursor: pointer;"><i class="fas fa-sort"></i></span>' +
                    '<input type="text" name="banner_input[]" class="form-control d-none" id="banner" value="">' +
                    '<div class="custom-file w-100">' +
                        '<input type="file" class="custom-file-input" id="banner" name="banner[]" accept="image/*" required>' +
                        '<label class="custom-file-label" for="banner">Choose PC Image</label>' +
                    '</div>' +
                    '<div class="custom-file w-100 mt-2">' +
                        '<input type="file" class="custom-file-input" id="banner_mob" name="banner_mob[]" accept="image/*" required>' +
                        '<label class="custom-file-label" for="banner">Choose Mobile Image</label>' +
                    '</div>' +
                    '<input type="text" name="banner_alt[]" class="form-control w-100 my-2" id="banner_alt" placeholder="圖片說明" required>' +
                    '<input type="text" name="banner_link[]" class="form-control w-100" id="banner_link" placeholder="圖片連結，無連結請填 - " required>' +
                    '<div class="img-preview mt-2"></div>' +
                    '<div class="img-preview-mob mt-2"></div>' +
                    '<span class="btn btn-danger mt-2 removeButton d-flex ml-auto" style="width: max-content;"><i class="fas fa-minus"></i></span>' +
                '</div>');
                count++;
            });

            // 移除欄位
            $("#dynamicField").on("click", ".removeButton", function() {
                count--;
                $(this).parent('div').remove();
            });

            $(document).on('change', '.banner_pc', function () {
                let fileInput = this;
                let fileReader = new FileReader();

                fileReader.onload = function(e) {
                    let previewHtml = `<p for="">PC</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                    $(fileInput).closest('.field-group').find('.img-preview').html(previewHtml);
                };

                fileReader.readAsDataURL(fileInput.files[0]);
            });
            $(document).on('change', '.banner_mob', function () {
                let fileInput = this;
                let fileReader = new FileReader();

                fileReader.onload = function(e) {
                    let previewHtml = `<p for="">Mobile</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                    $(fileInput).closest('.field-group').find('.img-preview-mob').html(previewHtml);
                };

                fileReader.readAsDataURL(fileInput.files[0]);
            });
        });

    </script>

@endpush
