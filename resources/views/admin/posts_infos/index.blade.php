@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>文章資訊</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right" href="{{ route('admin.postsInfos.create') }}">
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
                @include('admin.posts_infos.table')

                {{-- <div class="card-footer clearfix">
                    <div class="float-right">
                        @include('adminlte-templates::common.paginate', ['records' => $postsInfos])
                    </div>
                </div> --}}
            </div>

        </div>
    </div>

@endsection

@push('page_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
@endpush


@push('page_scripts')
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js">
    </script>
    <script>
        $(function () {
            let scrollX_enable = $(window).width() <= 1200;

            var table = $('#postsInfos-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.postsInfos.datatable') }}" + (window.location.search || ''),
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'post_front_cover_html', name: 'post_front_cover', orderable: false, searchable: false },
                    { data: 'post_title', name: 'post_title' },
                    { data: 'post_slug', name: 'post_slug' },
                    { data: 'type_name', name: 'type_name', orderable: false },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ],
                order: [[5, 'desc']],
                lengthChange: true,
                lengthMenu: [10, 15, 20, 30, 50],
                pageLength: 10,
                searching: true,
                ordering: true,
                scrollCollapse: true,
                scrollX: scrollX_enable,
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/zh_Hant.json"
                },
            });
        });

    </script>
@endpush