<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $redirectsInfo->id }}</p>
</div>

<!-- Old Url Field -->
<div class="col-sm-12">
    {!! Form::label('old_url', 'Old Url:') !!}
    <p>{{ $redirectsInfo->old_url }}</p>
</div>

<!-- New Url Field -->
<div class="col-sm-12">
    {!! Form::label('new_url', 'New Url:') !!}
    <p>{{ $redirectsInfo->new_url }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $redirectsInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $redirectsInfo->updated_at }}</p>
</div>

