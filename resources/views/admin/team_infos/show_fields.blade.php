<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $teamInfo->id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', '姓名:') !!}
    <p>{{ $teamInfo->name }}</p>
</div>

<!-- Role Field -->
<div class="col-sm-12">
    {!! Form::label('role', '角色:') !!}
    <p>{{ $teamInfo->role }}</p>
</div>

<!-- Introduce Field -->
<div class="col-sm-12">
    {!! Form::label('introduce', '介紹:') !!}
    <p>{{ $teamInfo->introduce }}</p>
</div>

<!-- Degree Field -->
<div class="col-sm-12">
    {!! Form::label('degree', '學歷:') !!}
    <p>{{ $teamInfo->degree }}</p>
</div>

<!-- Expertise Field -->
<div class="col-sm-12">
    {!! Form::label('expertise', '專長:') !!}
    <p>{{ $teamInfo->expertise }}</p>
</div>

<!-- Certificate License Field -->
<div class="col-sm-12">
    {!! Form::label('certificate_license', '證照/資格:') !!}
    <p>{{ $teamInfo->certificate_license }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $teamInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $teamInfo->updated_at }}</p>
</div>

