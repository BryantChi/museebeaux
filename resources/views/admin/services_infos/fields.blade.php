<!-- Service Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_name', '療程名稱:') !!}
    {!! Form::text('service_name', null, ['class' => 'form-control', 'required' => true]) !!}
</div>

<!-- Service Icon Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('service_icon', '療程項目 Icon:') !!}
    {!! Form::text('service_icon', null, ['class' => 'form-control']) !!}
</div> --}}
<div class="form-group col-sm-6">
    {!! Form::label('service_icon', '療程項目 Icon:') !!}

    <div class="custom-file">
        {{-- {!! Form::file('service_icon', null, ['class' => 'custom-file-input']) !!} --}}
        <input type="file" class="custom-file-input" id="service_icon" name="service_icon" accept="image/*">
        <label class="custom-file-label" for="service_icon">Choose file</label>
    </div>
    <div class="img-preview-icon mt-2">
        <p for="">預覽</p>
        @if ($servicesInfo->service_icon ?? null)
            <img src="{{ env('APP_URL', 'https://beauty4u-clinic.com') . '/uploads/' . $servicesInfo->service_icon }}"
                style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>

<!-- Service Icon Alt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_icon_alt', '療程項目 Icon Alt:') !!}
    {!! Form::text('service_icon_alt', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Cover Front Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('service_cover_front', '療程項目封面:') !!}
    {!! Form::text('service_cover_front', null, ['class' => 'form-control']) !!}
</div> --}}
<div class="form-group col-sm-6">
    {!! Form::label('service_cover_front', '療程項目封面:') !!}

    <div class="custom-file">
        {{-- {!! Form::file('service_cover_front', null, ['class' => 'custom-file-input']) !!} --}}
        <input type="file" class="custom-file-input" id="service_cover_front" name="service_cover_front" accept="image/*">
        <label class="custom-file-label" for="service_cover_front">Choose file</label>
    </div>
    <div class="img-preview-cover mt-2">
        <p for="">預覽</p>
        @if ($servicesInfo->service_icon ?? null)
            <img src="{{ env('APP_URL', 'https://beauty4u-clinic.com') . '/uploads/' . $servicesInfo->service_icon }}"
                style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>

<!-- Service Cover Front Alt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_cover_front_alt', '療程項目封面 Alt:') !!}
    {!! Form::text('service_cover_front_alt', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Description Field -->
<div class="form-group col-sm-8">
    {!! Form::label('service_description', '療程項目簡介:') !!}
    {!! Form::textarea('service_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Sub List Field -->
<div class="form-group col-sm-12">
    {!! Form::label('service_sub_list', '療程項目子項:') !!}
    {{-- {!! Form::text('service_sub_list', null, ['class' => 'form-control']) !!} --}}
    <div id="dynamicField">
        @foreach ($servicesInfo->service_sub_list ?? [] as $key => $value)
            <div class="mt-2 field-group card p-4 bg-light-subtle">
                <div class="input-group2 d-flex">
                    <input type="text" class="form-control item" name="service_sub_list[{{ $key }}][item]"
                        placeholder="Item" value="{{ $value['item'] }}" required>
                        <select name="service_sub_list[{{ $key }}][type]" class="form-control type">
                            <option value="">請選擇</option>
                            @foreach ($postsTypes as $pkey => $pvalue)
                                <option value="{{ $pkey }}" {{ $pkey == $value['type'] ? 'selected' : '' }}>
                                    {{ $pvalue }}</option>
                            @endforeach
                        </select>
                        <select name="service_sub_list[{{ $key }}][article]" class="form-control article">
                            <option value="">請選擇</option>

                            @foreach ($posts as $ptkey => $ptvalue)
                                @if ($ptvalue->post_type == $value['type'])
                                    <option value="{{ $ptvalue->id }}"
                                        {{ $ptvalue->id == $value['article'] ? 'selected' : '' }}>{{ $ptvalue->post_title }}
                                    </option>
                                @endif
                            @endforeach
                        </select>

                </div>
                <span class="btn btn-danger mt-2 removeButton d-flex ml-auto" style="width: max-content;"><i
                        class="fas fa-minus"></i></span>
            </div>
        @endforeach

    </div>
    <div class="d-flex justify-content-end w-100 mt-3">
        <span class="btn btn-primary my-1" id="addBtn"><i class="fas fa-plus"></i></span>
    </div>
</div>

@push('page_css')
    <style>
        input.item {
            background-color: #fff !important;
            border: 1px solid #aaa !important;
        }
    </style>
@endpush

@push('page_scripts')
    <script>
        $(document).ready(function() {
            var postType = @json($postsTypes ?? []);
            var posts = @json($posts ?? []);

            $('select.type').change(function() {
                var typeId = $(this).val();
                var at = $(this).parent().find('select.article');
                at.empty();
                if (typeId) {
                    at.prop('required', true);
                    at.append('<option value="">請選擇</option>');
                    posts.forEach(function(p) {
                        if (p.post_type == typeId) {
                            at.append('<option value="' + p.id + '">' + p.post_title + '</option>');
                        }
                    });
                } else {
                    at.prop('required', false);
                }
            })

            var count = {{ count($servicesInfo->service_sub_list ?? []) }};
            $('#addBtn').click(function() {
                var formIndex = $('#dynamic_form').children().length;
                var groupParent = $('<div class="mt-2 field-group card p-4 bg-light-subtle"></div>');
                var group = $(
                    '<div class="input-group2 d-flex"><input type="text" class="form-control item" name="service_sub_list[' +
                    count + '][item]" placeholder="Item" required ></div>'
                );
                var selectType = $(
                    '<select name="service_sub_list[' + count +
                    '][type]" class="form-control type"></select>');
                selectType.append('<option value="">請選擇</option>');
                Object.entries(postType).forEach(([key, value]) => {
                    selectType.append('<option value="' + key + '">' + value + '</option>');
                });
                var selectArticle = $(
                    '<select name="service_sub_list[' + count +
                    '][article]" class="form-control article"></select>');
                var remove = $(
                    '<span class="btn btn-danger mt-2 removeButton d-flex ml-auto" style="width: max-content;"><i class="fas fa-minus"></i></span>'
                )
                group.append(selectType).append(selectArticle);
                groupParent.append(group).append(remove);
                $('#dynamicField').append(groupParent);
                count++;

                selectType.change(function() {
                    var typeId = $(this).val();
                    // var post = posts.find(p => p.post_type == typeId);
                    selectArticle.empty();
                    selectArticle.append('<option value="">請選擇</option>');
                    if (typeId) {
                        selectArticle.prop('required', true);
                        posts.forEach(function(p) {
                            if (p.post_type == typeId) {
                                selectArticle.append('<option value="' + p.id + '">' + p
                                    .post_title + '</option>');
                            }
                        });
                    } else {
                        selectArticle.prop('required', false);
                    }

                });

                $('select').select2({
                    language: 'zh-TW',
                    // width: '100%',
                    maximumInputLength: 100,
                    minimumInputLength: 0,
                    tags: false,
                    placeholder: '請選擇',
                    allowClear: true
                });
            });


            $('#dynamicField').on('click', '.removeButton', function() {
                count--;
                $(this).parent('div.field-group').remove();
            });



            $(document).on('change', '#service_icon', function () {
                let fileInput = this;
                let fileReader = new FileReader();

                fileReader.onload = function(e) {
                    let previewHtml = `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                    $(fileInput).closest('.form-group').find('.img-preview-icon').html(previewHtml);
                };

                fileReader.readAsDataURL(fileInput.files[0]);
            });

            $(document).on('change', '#service_cover_front', function () {
                let fileInput = this;
                let fileReader = new FileReader();

                fileReader.onload = function(e) {
                    let previewHtml = `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                    $(fileInput).closest('.form-group').find('.img-preview-cover').html(previewHtml);
                };

                fileReader.readAsDataURL(fileInput.files[0]);
            });
        });
    </script>
@endpush
