<div class="table-responsive">
    <table class="table" id="aboutUsInfos-table">
        <thead>
        <tr>
            <th>Contents</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($aboutUsInfos as $aboutUsInfo)
            <tr>
                <td>{{ $aboutUsInfo->contents }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admin.aboutUsInfos.destroy', $aboutUsInfo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.aboutUsInfos.show', [$aboutUsInfo->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.aboutUsInfos.edit', [$aboutUsInfo->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
