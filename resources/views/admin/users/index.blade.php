@extends('layouts.admin.app')

@section('content')
    <style>
        .resp td {
            text-align: center;
            font-size: 20px;
        }

        .alert-success {
            width: 100%;
        }

        .alert-danger {
            width: 100%;
        }

        button.close {
            font-size: 1.5rem !important;
            height: 20px !important;
            top: 10px !important;
            background: none !important;
            color: #7c1dcf !important;
        }
    </style>
    <div class="app-title">
        <div>
            <h1>{{ $pageTitle }}</h1>
        </div>
    </div>
    @include('partials.messages')
    <table class="resp">
        <thead>
            <tr>
                <th scope="col" width="33%">User Name</th>
                <th scope="col" width="34%">Email</th>
                <th scope="col" width="34%">Actions</th>

            </tr>
        </thead>
        <tbody>
            @if ($users->count() == 0)
                <tr>
                    <td colspan="5">No records found</td>
                </tr>
            @endif
            @foreach ($users as $key => $user)
                <tr>
                    <td style="font-size: 20px;">{{ $user->name }}</td>
                    <td style="font-size: 20px;">{{ $user->email }}</td>
                    <td style="font-size: 20px;">
                        @if ($user->is_ban == 0)
                            <a href="{{ route('users.ban', ['id' => $user->id]) }}" class="btn btn-delete"
                                onclick="return confirm('Are you sure you want to Ban this user?');">Ban</a> |
                        @else
                            <a href="{{ route('users.unban', ['id' => $user->id]) }}" class="btn btn-delete"
                                onclick="return confirm('Are you sure you want to Unban this user?');">Unban</a> |
                        @endif
                        <a href="{{ route('users.delete', ['id' => $user->id]) }}" class="btn btn-delete"
                            onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $users->links() }}
    </div>
@endsection
