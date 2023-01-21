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
    <a href="{{ route('author.create') }}" class="btn btn-primary" style="float:right;margin:10px;">Add Author</a>
    <table class="resp">
        <thead>
            <tr>
                <th scope="col" width="25%">Author Name</th>
                <th scope="col" width="25%">Author Photo</th>
                <th scope="col" width="32%">About Author</th>
                <th scope="col" width="28%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $key => $author)
                <tr>
                    <td style="font-size: 15px;">{{ $author->name }}</td>
                    <td style="font-size: 15px;">
                        <img src="{{ url('admin_assets/images/authors/' . $author->image) }}" alt="author photo"
                            width="100px" height="100px">
                    </td>
                    <td style="font-size: 15px;">{{ $author->about }}</td>
                    <td class="" style="font-size: 15px;">
                        <a href="{{ route('authors.edit', ['id' => $author->id]) }}" class="btn btn-delete">Edit</a> |
                        <a href="{{ route('authors.delete', ['id' => $author->id]) }}" class="btn btn-delete"
                            onclick="return confirm('Are you sure you want to delete this Author?');">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $authors->links() }}
    </div>
@endsection
