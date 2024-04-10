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
