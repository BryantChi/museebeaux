@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>聯絡資訊 - 新增</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'admin.companyInfos.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.company_infos.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('儲存', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.companyInfos.create') }}" class="btn btn-default">重置</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
@push('third_party_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.tiny.cloud/1/1ugon3r0i7rnpx6jhdz4moygn9knxfai212wbqlixzr9hpi8/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script> --}}
    <script src="{!! asset('vendor/tinymce/js/tinymce/tinymce.js') !!}"></script>
@endpush
@push('page_scripts')
    <script src="{{ asset('js/company.js') }}" referrerpolicy="no-referrer"></script>
@endpush
