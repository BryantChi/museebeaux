<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $companyInfo->id }}</p>
</div>

<!-- Company Name Field -->
<div class="col-sm-12">
    {!! Form::label('company_name', '公司名稱:') !!}
    <p>{{ $companyInfo->company_name }}</p>
</div>

<!-- Company Address Field -->
<div class="col-sm-12">
    {!! Form::label('company_address', '公司地址:') !!}
    <p>{{ $companyInfo->company_address }}</p>
</div>

<!-- Company Map Url Field -->
<div class="col-sm-12">
    {!! Form::label('company_map_url', '公司 Map Url:') !!}
    <p><a href="{{ $companyInfo->company_map_url }}" target="_blank">{{ $companyInfo->company_map_url }}</a></p>
</div>

<!-- Company Map Iframe Field -->
<div class="col-sm-12">
    {!! Form::label('company_map_iframe', '公司 Map Iframe 內嵌:') !!}
    <div>{!! $companyInfo->company_map_iframe !!}</div>
</div>

<!-- Company Phone Field -->
<div class="col-sm-12">
    {!! Form::label('company_phone', '公司電話:') !!}
    <p><a href="tel:{{ $companyInfo->company_phone }}">{{ $companyInfo->company_phone }}</a></p>
</div>

<!-- Company Fax Field -->
<div class="col-sm-12">
    {!! Form::label('company_fax', '公司傳真:') !!}
    <p><a href="tel:+{{ $companyInfo->company_fax }}">{{ $companyInfo->company_fax }}</a></p>
</div>

<!-- Company Facebook Field -->
<div class="col-sm-12">
    {!! Form::label('company_facebook', '公司 Facebook:') !!}
    <p>{{ $companyInfo->company_facebook }}</p>
</div>

<!-- Company Instagram Field -->
<div class="col-sm-12">
    {!! Form::label('company_instagram', '公司 Instagram:') !!}
    <p>{{ $companyInfo->company_instagram }}</p>
</div>

<!-- Company Line Field -->
<div class="col-sm-12">
    {!! Form::label('company_line', '公司 Line:') !!}
    <p>{{ $companyInfo->company_line }}</p>
</div>

<!-- Company Youtube Field -->
<div class="col-sm-12">
    {!! Form::label('company_youtube', '公司 Youtube:') !!}
    <p>{{ $companyInfo->company_youtube }}</p>
</div>

<!-- Conpany X Field -->
<div class="col-sm-12">
    {!! Form::label('company_x', '公司 X:') !!}
    <p>{{ $companyInfo->company_x }}</p>
</div>

<!-- Company Id Number Field -->
<div class="col-sm-12">
    {!! Form::label('company_id_number', '公司統編:') !!}
    <p>{{ $companyInfo->company_id_number }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $companyInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $companyInfo->updated_at }}</p>
</div>

