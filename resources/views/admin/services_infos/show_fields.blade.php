<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $servicesInfo->id }}</p>
</div>

<!-- Service Name Field -->
<div class="col-sm-12">
    {!! Form::label('service_name', '療程名稱:') !!}
    <p>{{ $servicesInfo->service_name }}</p>
</div>

<!-- Service Icon Field -->
<div class="col-sm-12">
    {!! Form::label('service_icon', '療程項目 Icon:') !!}
    <p>{{ $servicesInfo->service_icon }}</p>
</div>

<!-- Service Icon Alt Field -->
<div class="col-sm-12">
    {!! Form::label('service_icon_alt', '療程項目 Icon Alt:') !!}
    <p>{{ $servicesInfo->service_icon_alt }}</p>
</div>

<!-- Service Cover Front Field -->
<div class="col-sm-12">
    {!! Form::label('service_cover_front', '療程項目封面:') !!}
    <p>{{ $servicesInfo->service_cover_front }}</p>
</div>

<!-- Service Cover Front Alt Field -->
<div class="col-sm-12">
    {!! Form::label('service_cover_front_alt', '療程項目封面 Alt:') !!}
    <p>{{ $servicesInfo->service_cover_front_alt }}</p>
</div>

<!-- Service Description Field -->
<div class="col-sm-12">
    {!! Form::label('service_description', '療程項目描述:') !!}
    <p>{{ $servicesInfo->service_description }}</p>
</div>

<!-- Service Sub List Field -->
<div class="col-sm-12">
    {!! Form::label('service_sub_list', '療程項目子項:') !!}
    @foreach ($servicesInfo->service_sub_list ?? [] as $key => $value)
        <div class="mb-2">
            <h5>項目{{ $key + 1 }}：{{ $value['item'] }}</h5>
            <p>文章類型：{{ \App\Models\Admin\PostTypeInfo::find($value['type'])->type_name }}</p>
            <p>文章名稱：{{ \App\Models\Admin\PostsInfo::find($value['article'])->post_title }}</p>
        </div>
    @endforeach
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $servicesInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $servicesInfo->updated_at }}</p>
</div>
