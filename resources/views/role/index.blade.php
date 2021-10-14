@extends('home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            @section('content_header')
                <h2>Role Management</h2>
            @stop
        </div>
        <div class="pull-right">
            @can('role-create')
                <a class="btn btn-success" href="{{ route('role.create') }}"> Create New Role</a>
            @endcan
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@section('plugins.Datatables ', true)
<table class="table table-bordered" id="role_table">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('role.show', $role->id) }}">Show</a>
                @can('role-edit')
                    <a class="btn btn-primary" href="{{ route('role.edit', $role->id) }}">Edit</a>
                @endcan
                @can('role-delete')
                    <form action="{{ route('user.destroy', $role->id) }}" method="POST"
                        onsubmit="return confirm('{{ trans('areYouSure') }}');" style="display: inline-block;">
                        @method('delete')
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                @endcan
            </td>
        </tr>
    @endforeach
</table>
{!! $roles->render() !!}
@endsection
