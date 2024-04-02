<!-- Service Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_name', '服務名稱:') !!}
    {!! Form::text('service_name', null, ['class' => 'form-control', 'required' => true]) !!}
</div>

<!-- Service Icon Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('service_icon', '服務項目 Icon:') !!}
    {!! Form::text('service_icon', null, ['class' => 'form-control']) !!}
</div> --}}
<div class="form-group col-sm-6">
    {!! Form::label('service_icon', '服務項目 Icon:') !!}

    <div class="custom-file">
        {!! Form::file('service_icon', null, ['class' => 'custom-file-input', 'required' => true]) !!}
        {{-- <input type="file" class="custom-file-input" id="service_icon" name="service_icon" accept="image/*"> --}}
        <label class="custom-file-label" for="service_icon">Choose file</label>
    </div>
</div>

<!-- Service Icon Alt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_icon_alt', '服務項目 Icon Alt:') !!}
    {!! Form::text('service_icon_alt', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Cover Front Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('service_cover_front', '服務項目封面:') !!}
    {!! Form::text('service_cover_front', null, ['class' => 'form-control']) !!}
</div> --}}
<div class="form-group col-sm-6">
    {!! Form::label('service_cover_front', '服務項目封面:') !!}

    <div class="custom-file">
        {!! Form::file('service_cover_front', null, ['class' => 'custom-file-input', 'required' => true]) !!}
        {{-- <input type="file" class="custom-file-input" id="service_cover_front" name="service_cover_front" accept="image/*"> --}}
        <label class="custom-file-label" for="service_cover_front">Choose file</label>
    </div>
</div>

<!-- Service Cover Front Alt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_cover_front_alt', '服務項目封面 Alt:') !!}
    {!! Form::text('service_cover_front_alt', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Sub List Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_sub_list', '服務項目子項:') !!}
    {!! Form::text('service_sub_list', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_description', '服務項目說明:') !!}
    {!! Form::textarea('service_description', null, ['class' => 'form-control']) !!}
</div>
