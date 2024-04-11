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

<!-- Facebook Field -->
<div class="col-sm-12">
    {!! Form::label('facebook', 'Facebook:') !!}
    <p><a href="{{ $teamInfo->facebook == '' ? 'javascript:void(0)' : $teamInfo->facebook }}" target="_blank">{{ $teamInfo->facebook == '' ? '無' : $teamInfo->facebook }}</a></p>
</div>

<!-- Threads Field -->
<div class="col-sm-12">
    {!! Form::label('threads', 'Threads:') !!}
    <p><a href="{{ $teamInfo->threads == '' ? 'javascript:void(0)' : $teamInfo->threads }}" target="_blank">{{ $teamInfo->threads == '' ? '無' : $teamInfo->threads }}</a></p>
</div>

<!-- Line Field -->
<div class="col-sm-12">
    {!! Form::label('line', 'Line:') !!}
    <p><a href="{{ $teamInfo->line == '' ? 'javascript:void(0)' : $teamInfo->line }}" target="_blank">{{ $teamInfo->line == '' ? '無' : $teamInfo->line }}</a></p>
</div>

<!-- Instagram Field -->
<div class="col-sm-12">
    {!! Form::label('instagram', 'Instagram:') !!}
    <p><a href="{{ $teamInfo->instagram == '' ? 'javascript:void(0)' : $teamInfo->instagram }}" target="_blank">{{ $teamInfo->instagram == '' ? '無' : $teamInfo->instagram }}</a></p>
</div>

<!-- Headshots Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('headshots', '頭像:') !!}
    <p>
        <img src="{{ env('APP_URL') . '/uploads/' . $teamInfo->headshots }}" class="img-fluid img-thumbnail" style="max-width: 300px;" alt="">
    </p>
</div> --}}

<!-- Headshots Alt Field -->
<div class="col-sm-12">
    {!! Form::label('headshots_alt', '頭像 Alt:') !!}
    <p>{{ $teamInfo->headshots_alt }}</p>
</div>

<!-- Introduce Field -->
<div class="col-sm-12">
    {!! Form::label('introduce', '簡介:') !!}
    <p>{{ $teamInfo->introduce }}</p>
</div>

<!-- Degree Field -->
<div class="col-sm-12">
    {!! Form::label('degree', '學歷:') !!}
    <ul>
        @foreach ($teamInfo->degree ?? [] as $degree)
            <li>{{ $degree }}</li>
        @endforeach
    </ul>
</div>

<!-- Experience Field -->
<div class="col-sm-12">
    {!! Form::label('experience', '經歷:') !!}
    <ul>
        @foreach ($teamInfo->experience ?? [] as $experience)
            <li>{{ $experience }}</li>
        @endforeach
    </ul>
</div>

<!-- Expertise Field -->
<div class="col-sm-12">
    {!! Form::label('expertise', '專長:') !!}
    <ul>
        @foreach ($teamInfo->expertise ?? [] as $expertise)
            <li>{{ $expertise }}</li>
        @endforeach
    </ul>
</div>

<!-- Certificate License Field -->
<div class="col-sm-12">
    {!! Form::label('certificate_license', '證照/資格:') !!}
    <ul>
        @foreach ($teamInfo->certificate_license ?? [] as $certificate_license)
            <li>{{ $certificate_license }}</li>
        @endforeach
    </ul>
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

