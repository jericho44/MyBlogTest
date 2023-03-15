@extends('app')
@section('title', 'User')
@section('content')
    <div class="card-body mt-2">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name User</th>
                    <th>Name Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('users.create') }}" class="mb-3 btn btn-primary">Add User</a>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @if ($user->role === 1)
                            <td>Admin</td>
                        @else
                            <td>User</td>
                        @endif>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">
                                    Edit
                                </a>
                                <button class="btn btn-danger btn-sm delete-confirm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
