@extends('layouts.admin.app')

@section('content')
    <style>
        .resp td {
            text-align: center;
            font-size: 20px;
        }

        .action_btns {
            display: flex;
            justify-content: center;
            align-items: center;
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
    <a href="{{ route('music-category.create') }}" class="btn btn-primary" style="float:right;margin:10px;">Add Music Category</a>
    <table class="resp">
        <thead>
            <tr>
                <th scope="col" width="25%">Music Category</th>
                <th scope="col" width="25%">Image</th>
                <th scope="col" width="32%">Description</th>
                <th scope="col" width="28%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($musicCategories as $key => $musicCategory)
                <tr>
                    <td style="font-size: 15px;">{{ $musicCategory->name }}</td>
                    <td style="font-size: 15px;">
                        <img src="{{ url('admin_assets/images/music-categories/' . $musicCategory->image) }}" alt="music category photo" width="100px" height="100px">
                    </td>
                    <td style="font-size: 15px;">{{ $musicCategory->description }}</td>
                    <td class="" style="font-size: 15px;">
                        <a href="{{ route('music-category.edit', ['id' => $musicCategory->id]) }}" class="btn btn-delete">Edit</a> |
                        <a href="{{ route('music-category.delete', ['id' => $musicCategory->id]) }}" class="btn btn-delete"
                            onclick="return confirm('Are you sure you want to delete this Music Category?');">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $musicCategories->links() }}
    </div>
@endsection
