<div class="table-responsive">
    <table class="table" id="teamInfos-table">
        <thead>
            <tr>
                <th>個人照</th>
                <th>姓名</th>
                <th>角色</th>
                <th>社群</th>
                <th>簡介</th>
                <th>學歷</th>
                <th>經歷</th>
                <th>專長</th>
                <th>證照/資格</th>
                <th colspan="3">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teamInfos as $teamInfo)
                <tr>
                    <td>
                        <a href="{{ env('APP_URL') . '/uploads/' . $teamInfo->headshots }}" data-fancybox="{{ $teamInfo->id }}">
                            <img src="{{ env('APP_URL') . '/uploads/' . $teamInfo->headshots }}" class="img-fluid img-thumbnail" style="max-width: 200px;" alt="">
                        </a>
                    </td>
                    <td style="word-break: keep-all;">{{ $teamInfo->name }}</td>
                    <td style="word-break: keep-all;">{{ $teamInfo->role }}</td>
                    <td>
                        <ul class="list-unstyled">
                            <li><a href="{{ $teamInfo->facebook == '' ? 'javascript:void(0)' : $teamInfo->facebook }}">Facebook</a></li>
                            <li><a href="{{ $teamInfo->threads == '' ? 'javascript:void(0)' : $teamInfo->threads }}">Threads</a></li>
                            <li><a href="{{ $teamInfo->line == '' ? 'javascript:void(0)' : $teamInfo->line }}">Line</a></li>
                            <li><a href="{{ $teamInfo->instagram == '' ? 'javascript:void(0)' : $teamInfo->instagram }}">Instagram</a></li>
                        </ul>
                    </td>
                    <td>{{ $teamInfo->introduce }}</td>
                    <td>
                        <ul class="{{ count($teamInfo->degree ?? []) == 0 ? 'd-none' : '' }}">
                            @foreach ($teamInfo->degree ?? [] as $degree)
                                <li>{{ $degree }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul class="{{ count($teamInfo->experience ?? []) == 0 ? 'd-none' : '' }}">
                            @foreach ($teamInfo->experience ?? [] as $experience)
                                <li>{{ $experience }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul class="{{ count($teamInfo->expertise ?? []) == 0 ? 'd-none' : '' }}">
                            @foreach ($teamInfo->expertise ?? [] as $expertise)
                                <li>{{ $expertise }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul class="{{ count($teamInfo->certificate_license ?? []) == 0 ? 'd-none' : '' }}">
                            @foreach ($teamInfo->certificate_license ?? [] as $certificate_license)
                                <li>{{ $certificate_license }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.teamInfos.destroy', $teamInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.teamInfos.show', [$teamInfo->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.teamInfos.edit', [$teamInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'button',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return check(this)",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
