@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>團隊資訊 - 顯示</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('admin.teamInfos.index') }}">
                        返回
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 order-md-1 order-2">
                        @include('admin.team_infos.show_fields')
                    </div>
                    <div class="col-md-4 text-end order-md-2 order-1">
                        <img src="{{ env('APP_URL') . '/uploads/' . $teamInfo->headshots }}" class="img-fluid img-thumbnail" style="max-width: 300px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
