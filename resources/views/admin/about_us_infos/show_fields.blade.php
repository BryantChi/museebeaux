<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $aboutUsInfo->id }}</p>
</div>

<!-- Contents Field -->
<div class="col-sm-12">
    {!! Form::label('contents', 'Contents:') !!}
    <p>{{ $aboutUsInfo->contents }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $aboutUsInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $aboutUsInfo->updated_at }}</p>
</div>

