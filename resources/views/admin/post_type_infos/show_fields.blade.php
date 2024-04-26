<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $postTypeInfo->id }}</p>
</div>

<!-- Type Name Field -->
<div class="col-sm-12">
    {!! Form::label('type_name', '分類名稱:') !!}
    <p>{{ $postTypeInfo->type_name }}</p>
</div>

<!-- Type Slug Field -->
<div class="col-sm-12">
    {!! Form::label('type_slug', '分類自訂網址:') !!}
    <p>{{ $postTypeInfo->type_slug }}</p>
</div>

<!-- Type Parent Id Field -->
<div class="col-sm-12">
    {!! Form::label('type_parent_id', '上級分類:') !!}
    <p>{{ DB::table('post_type_infos')->whereNull('deleted_at')->where('id', $postTypeInfo->type_parent_id)->value('type_name') ?? '無' }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $postTypeInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $postTypeInfo->updated_at }}</p>
</div>

