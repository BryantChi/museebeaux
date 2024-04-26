<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', '姓名:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => true, 'placeholder' => '請輸入姓名']) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', '角色:') !!}
    {!! Form::text('role', null, ['class' => 'form-control', 'placeholder' => '請輸入角色']) !!}
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'https://']) !!}
</div>

<!-- Threads Field -->
<div class="form-group col-sm-6">
    {!! Form::label('threads', 'Threads:') !!}
    {!! Form::text('threads', null, ['class' => 'form-control', 'placeholder' => 'https://']) !!}
</div>

<!-- Line Field -->
<div class="form-group col-sm-6">
    {!! Form::label('line', 'Line:') !!}
    {!! Form::text('line', null, ['class' => 'form-control', 'placeholder' => 'https://']) !!}
</div>

<!-- Instagram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instagram', 'Instagram:') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'https://']) !!}
</div>

<!-- Headshots Field -->
<div class="form-group col-sm-6">
    {!! Form::label('headshots', '頭像:') !!}

    <div class="custom-file">
        {{-- {!! Form::file('headshots', null, ['class' => 'custom-file-input', 'id' => 'headshots', 'required' => true, 'accept' => 'image/*']) !!} --}}
        <input type="file" class="custom-file-input" id="headshots" name="headshots" accept="image/*" {{ Request::is('/admin/teamInfos/*/edit') || ($teamInfo->headshots ?? null) != null ? '' : 'required' }}>
        <label class="custom-file-label" for="headshots">Choose Image</label>
    </div>
    <div class="img-preview-headshots mt-2">
        <p for="">預覽</p>
        @if ($teamInfo->headshots ?? null)
        <img src="{{ env('APP_URL'). '/uploads/' . $teamInfo->headshots }}" style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>

<!-- Headshots Alt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('headshots_alt', '頭像 Alt:') !!}
    {!! Form::text('headshots_alt', null, ['class' => 'form-control', 'placeholder' => '請輸入 Alt']) !!}
</div>

<!-- Introduce Field -->
<div class="form-group col-sm-12">
    {!! Form::label('introduce', '簡介:') !!}
    {!! Form::textarea('introduce', null, ['class' => 'form-control', 'id' => 'content', 'rows' => "10", 'placeholder' => '請輸入簡介']) !!}
</div>

<!-- Degree Field -->
<div class="form-group col-sm-6">
    {!! Form::label('degree', '學歷:') !!}
    <div id="dynamicField" class="dynamicField">
        @foreach ($teamInfo->degree ?? [] as $i => $degree)
            <div class="input-group mb-3">
                <input type="text" name="degree[]" class="form-control" id="degree" value="{{ $degree }}" placeholder="請輸入學歷" required>
                <span class="btn btn-danger removeButton d-flex ml-auto align-items-center" style="width: max-content;"><i class="fas fa-minus"></i></span>
            </div>
            @endforeach
        {{-- @if (Request::is('admin/teamInfos/*/edit*'))
            @if (count($teamInfo->degree) == 0)
                <div class="input-group mb-3">
                    <input type="text" name="degree[]" class="form-control" id="degree">
                </div>
            @endif
            @foreach ($teamInfo->degree as $i => $degree)
            <div class="input-group mb-3">
                <input type="text" name="degree[]" class="form-control" id="degree" value="{{ $degree }}" {{ $i != 0 ? 'required' : ''}}>
                <span class="btn btn-danger removeButton d-flex ml-auto align-items-center {{ $i == 0 ? 'd-none' : '' }}" style="width: max-content;"><i class="fas fa-minus"></i></span>
            </div>
            @endforeach
        @else
        <div class="input-group mb-3">
            <input type="text" name="degree[]" class="form-control" id="degree">
        </div>
        @endif --}}
    </div>

    <div class="d-flex justify-content-end w-100">
        <span class="btn btn-primary my-1" id="addDegreeBtn"><i class="fas fa-plus"></i></span>
    </div>
</div>

<!-- Experience Field -->
<div class="form-group col-sm-6">
    {!! Form::label('experience', '經歷/資格:') !!}
    <div id="dynamicField" class="dynamicField">
        @foreach ($teamInfo->experience ?? [] as $i => $experience)
            <div class="input-group mb-3">
                <input type="text" name="experience[]" class="form-control" id="experience" value="{{ $experience }}" placeholder="請輸入經歷" required>
                <span class="btn btn-danger removeButton d-flex ml-auto align-items-center" style="width: max-content;"><i class="fas fa-minus"></i></span>
            </div>
            @endforeach
        {{-- @if (Request::is('admin/teamInfos/*/edit*'))
            @if (count($teamInfo->experience) == 0)
                <div class="input-group mb-3">
                    <input type="text" name="experience[]" class="form-control" id="experience">
                </div>
            @endif
            @foreach ($teamInfo->experience as $i => $experience)
            <div class="input-group mb-3">
                <input type="text" name="experience[]" class="form-control" id="experience" value="{{ $experience }}" {{ $i != 0 ? 'required' : ''}}>
                <span class="btn btn-danger removeButton d-flex ml-auto align-items-center {{ $i == 0 ? 'd-none' : '' }}" style="width: max-content;"><i class="fas fa-minus"></i></span>
            </div>
            @endforeach
        @else
        <div class="input-group mb-3">
            <input type="text" name="experience[]" class="form-control" id="experience">
        </div>
        @endif --}}
    </div>

    <div class="d-flex justify-content-end w-100">
        <span class="btn btn-primary my-1" id="addExperienceBtn"><i class="fas fa-plus"></i></span>
    </div>
</div>

<!-- Expertise Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expertise', '專長:') !!}
    <div id="dynamicField" class="dynamicField">
        @foreach ($teamInfo->expertise ?? [] as $i => $expertise)
            <div class="input-group mb-3">
                <input type="text" name="expertise[]" class="form-control" id="expertise" value="{{ $expertise }}" placeholder="請輸入專長" required>
                <span class="btn btn-danger removeButton d-flex ml-auto align-items-center" style="width: max-content;"><i class="fas fa-minus"></i></span>
            </div>
            @endforeach
        {{-- @if (Request::is('admin/teamInfos/*/edit*'))
            @if (count($teamInfo->expertise) == 0)
                <div class="input-group mb-3">
                    <input type="text" name="expertise[]" class="form-control" id="expertise">
                </div>
            @endif
            @foreach ($teamInfo->expertise as $i => $expertise)
            <div class="input-group mb-3">
                <input type="text" name="expertise[]" class="form-control" id="expertise" value="{{ $expertise }}" {{ $i != 0 ? 'required' : ''}}>
                <span class="btn btn-danger removeButton d-flex ml-auto align-items-center {{ $i == 0 ? 'd-none' : '' }}" style="width: max-content;"><i class="fas fa-minus"></i></span>
            </div>
            @endforeach
        @else
        <div class="input-group mb-3">
            <input type="text" name="expertise[]" class="form-control" id="expertise">
        </div>
        @endif --}}
    </div>

    <div class="d-flex justify-content-end w-100">
        <span class="btn btn-primary my-1" id="addExpertiseBtn"><i class="fas fa-plus"></i></span>
    </div>
</div>

<!-- Certificate License Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('certificate_license', '證照/資格:') !!}
    <div id="dynamicField" class="dynamicField">
        @foreach ($teamInfo->certificate_license ?? [] as $i => $certificate_license)
            <div class="input-group mb-3">
                <input type="text" name="certificate_license[]" class="form-control" id="certificate_license" value="{{ $certificate_license }}" placeholder="請輸入證照/資格" required>
                <span class="btn btn-danger removeButton d-flex ml-auto align-items-center" style="width: max-content;"><i class="fas fa-minus"></i></span>
            </div>
            @endforeach
        @if (Request::is('admin/teamInfos/*/edit*'))
            @if (count($teamInfo->certificate_license) == 0)
                <div class="input-group mb-3">
                    <input type="text" name="certificate_license[]" class="form-control" id="certificate_license">
                </div>
            @endif
            @foreach ($teamInfo->certificate_license as $i => $certificate_license)
            <div class="input-group mb-3">
                <input type="text" name="certificate_license[]" class="form-control" id="certificate_license" value="{{ $certificate_license }}" {{ $i != 0 ? 'required' : ''}}>
                <span class="btn btn-danger removeButton d-flex ml-auto align-items-center {{ $i == 0 ? 'd-none' : '' }}" style="width: max-content;"><i class="fas fa-minus"></i></span>
            </div>
            @endforeach
        @else
        <div class="input-group mb-3">
            <input type="text" name="certificate_license[]" class="form-control" id="certificate_license">
        </div>
        @endif
    </div>

    <div class="d-flex justify-content-end w-100">
        <span class="btn btn-primary my-1" id="addCertificateLicenseBtn"><i class="fas fa-plus"></i></span>
    </div>
</div> --}}

<!-- Certificate License Photos Field -->
<div class="form-group col-sm-6 d-none">
    {!! Form::label('certificate_license_photos', '證照/資格照片:') !!}

    <div class="custom-file">
        {{-- {!! Form::file('certificate_license_photos', null, ['class' => 'custom-file-input', 'required' => true, 'accept' => 'image/*', 'multiple' => true]) !!} --}}
        <input type="file" class="custom-file-input" id="certificate_license_photos" name="certificate_license_photos" accept="image/*" multiple>
        <label class="custom-file-label" for="certificate_license_photos">Choose Image</label>
    </div>
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
    <script src="{{ asset('js/teams.js') }}" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {

            $("#addDegreeBtn").click(function() {
                $(this).parent().parent().find(".dynamicField").append(
                    '<div class="input-group mb-3">' +
                    '<input type="text" name="degree[]" class="form-control" id="degree" placeholder="請輸入學歷" required>' +
                    '<span class="btn btn-danger removeButton d-flex ml-auto align-items-center" style="width: max-content;"><i class="fas fa-minus"></i></span>' +
                    '</div>'
                );
            });
            $('#addExperienceBtn').click(function() {
                $(this).parent().parent().find(".dynamicField").append(
                    '<div class="input-group mb-3">' +
                    '<input type="text" name="experience[]" class="form-control" id="experience" placeholder="請輸入經歷" required>' +
                    '<span class="btn btn-danger removeButton d-flex ml-auto align-items-center" style="width: max-content;"><i class="fas fa-minus"></i></span>' +
                    '</div>'
                );
            });
            $("#addExpertiseBtn").click(function() {
                $(this).parent().parent().find(".dynamicField").append(
                    '<div class="input-group mb-3">' +
                    '<input type="text" name="expertise[]" class="form-control" id="expertise" placeholder="請輸入專長" required>' +
                    '<span class="btn btn-danger removeButton d-flex ml-auto align-items-center" style="width: max-content;"><i class="fas fa-minus"></i></span>' +
                    '</div>'
                );
            });
            $("#addCertificateLicenseBtn").click(function() {
                $(this).parent().parent().find(".dynamicField").append(
                    '<div class="input-group mb-3">' +
                    '<input type="text" name="certificate_license[]" class="form-control" id="certificate_license" placeholder="請輸入證照/資格" required>' +
                    '<span class="btn btn-danger removeButton d-flex ml-auto align-items-center" style="width: max-content;"><i class="fas fa-minus"></i></span>' +
                    '</div>'
                );
            });

            $('.dynamicField').on('click', '.removeButton', function () {
                $(this).parent('div').remove();
            })

            $(document).on('change', '#headshots', function () {
                let fileInput = this;
                let fileReader = new FileReader();

                fileReader.onload = function(e) {
                    let previewHtml = `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                    $(fileInput).closest('.form-group').find('.img-preview-headshots').html(previewHtml);
                };

                fileReader.readAsDataURL(fileInput.files[0]);
            });
        })
    </script>
@endpush
