<!-- Type Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_name', '分類名稱:') !!}
    {!! Form::text('type_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_slug', '分類自訂網址:') !!}
    {!! Form::text('type_slug', null, ['class' => 'form-control', 'required' => true]) !!}
</div>

<!-- Type Parent Id Field -->
@php
    if (DB::table('post_type_infos')->whereNull('deleted_at')->where('type_parent_id', $postTypeInfo->id ?? null)->count() > 0 && Request::is('admin/postTypeInfos/*/edit*')) {
        $disabled = true;
    } else {
        $disabled = false;
    }
@endphp
<div class="form-group col-sm-6 {{ $disabled ? 'd-none' : '' }}">
    {!! Form::label('type_parent_id', '上級分類:') !!}
    {!! Form::select('type_parent_id', ['' => '請選擇'] + ($parentTypes ?? []), $postTypeInfo->type_parent_id ?? null, ['class' => 'form-control', 'disabled' => $disabled]) !!}
</div>
