<!-- Old Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('old_url', 'Old Url:') !!}
    {!! Form::text('old_url', null, ['class' => 'form-control', 'placeholder' => '請輸入原始網址，例如：/xxx/xxx/xxx']) !!}
    <small class="form-text text-muted">
        若您的轉址僅針對本站點，建議只輸入以「/」開頭的路徑。
    </small>
</div>

<!-- New Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('new_url', 'New Url:') !!}
    {!! Form::text('new_url', null, ['class' => 'form-control', 'placeholder' => '請輸入原始網址，例如：/xxx/xxx/xxx']) !!}
    <small class="form-text text-muted">
        若您的轉址僅針對本站點，建議只輸入以「/」開頭的路徑。
    </small>
</div>
