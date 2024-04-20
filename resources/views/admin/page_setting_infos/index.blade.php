@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>頁面設定資訊</h1>
                </div>
                <div class="col-sm-6 {{ Auth::user()->id == 1 ? '' : 'd-none' }}">
                    <a class="btn btn-primary float-right"
                       href="{{ route('admin.pageSettingInfos.create') }}">
                       <i class="fas fa-plus"></i>
                       新增
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('admin.page_setting_infos.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        @include('adminlte-templates::common.paginate', ['records' => $pageSettingInfos])
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

