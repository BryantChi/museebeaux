<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $pageSettingInfo->id }}</p>
</div>

<!-- Url Field -->
<div class="col-sm-12">
    {!! Form::label('url', '網址:') !!}
    <p>{{ $pageSettingInfo->url }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', '標題:') !!}
    <p>{{ $pageSettingInfo->title }}</p>
</div>

<!-- Meta-Title Field -->
<div class="col-sm-12">
    {!! Form::label('meta_title', 'Meta-Title:') !!}
    <p>{{ $pageSettingInfo->meta_title }}</p>
</div>

<!-- Meta-Description Field -->
<div class="col-sm-12">
    {!! Form::label('meta_description', 'Meta-Description:') !!}
    <p>{{ $pageSettingInfo->meta_description }}</p>
</div>

<!-- Meta-Keywords Field -->
<div class="col-sm-12">
    {!! Form::label('meta_keywords', 'Meta-Keywords:') !!}
    <p>{{ $pageSettingInfo->meta_keywords }}</p>
</div>

<!-- Meta-Google-Site-Verification Field -->
<div class="col-sm-12">
    {!! Form::label('meta_google_site_verification', 'Meta-Google-Site-Verification:') !!}
    <p>{{ $pageSettingInfo->meta_google_site_verification }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pageSettingInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pageSettingInfo->updated_at }}</p>
</div>

