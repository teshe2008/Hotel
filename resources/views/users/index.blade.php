@extends('home')
@section('content')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            @section('content_header')
                <h2>Users Management</h2>
            @stop
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('user.create') }}"> Create New User</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Roles</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($data as $key => $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if (!empty($user->getRoleNames()))
                    @foreach ($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
            </td>
            <td>
                <a class="btn btn-info" href="{{ route('user.show', $user->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Edit</a>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                    onsubmit="return confirm('{{ trans('areYouSure') }}');" style="display: inline-block;">
                    @method('delete')
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
{!! $data->render() !!}
@endsection
