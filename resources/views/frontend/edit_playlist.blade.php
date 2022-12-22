@extends('layouts.frontend.app')
@section('content')
    <style>
        .user-dashboard {
            padding: 100px 0;
        }

        .user-dashboard-bx {
            background: #fff;
            padding: 30px;
        }

        .user-dashboard-left {
            border-right: 1px solid #e6e6e6;
        }

        .user-dashboard-left-bx {
            padding: 30px;
        }

        .user-dashboard-left-top {
            display: flex;
            align-items: center;
        }

        .user-dashboard-left-top-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .user-dashboard-left-top-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 1px solid #ececec;
        }

        .user-dashboard-left-top-text h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .user-dashboard-left-top-text p {
            font-size: 14px;
            margin-bottom: 0;
        }

        .user-dashboard-left-bottom {
            padding: 30px 0px;
        }

        .user-dashboard-left-bottom ul li {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
            position: relative;
            border-radius: 4px;
            border: 1px solid #ececec;
        }

        .user-dashboard-left-bottom ul li:last-child {
            margin-bottom: 0;
        }

        .user-dashboard-left-bottom ul li span {
            width: 100px;
            font-size: 14px;
            font-weight: 600;
        }

        .user-dashboard-left-bottom ul li a {
            color: #000;
            font-size: 16px;
            /* color: #7E7E7E; */
            padding: 15px 26px;
            font-weight: 700;
            width: 100%;
        }

        .user-dashboard-right {
            padding: 15px;
        }

        .user-dashboard-right h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .user-dashboard-right ul li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .user-dashboard-right ul li:last-child {
            margin-bottom: 0;
        }

        .user-dashboard-right ul li span {
            width: 100px;
            font-size: 14px;
            font-weight: 600;
        }

        .user-dashboard-right ul li a {
            color: #000;
        }

        .user-dashboard-right ul li a:hover {
            text-decoration: underline;
        }

        .user-dashboard-right ul li a i {
            margin-right: 10px;
        }

        .user-dashboard-left-bottom ul li a:hover {
            color: #ff0000;
        }

        .user-dashboard-right-bottom-bx-bottom-bx {
            display: flex;
            align-items: center;
        }

        .user-dashboard-right-bottom-bx-bottom-bx img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
        }

        .user-dashboard-right-bottom-bx-bottom-bx h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .user-dashboard-right-bottom-bx-bottom-bx p {
            font-size: 14px;
            margin-bottom: 0;
        }

        .user-dashboard-right-bottom-bx-bottom-bx a {
            color: #000;
        }

        .user-dashboard-right-bottom-bx-bottom-bx a:hover {
            text-decoration: underline;
        }

        .user-dashboard-right-bottom-bx-bottom-bx a i {
            margin-right: 10px;
        }

        table {
            width: 100%;
            margin-bottom: 1.5rem;
            border-collapse: collapse;
            vertical-align: middle;
        }

        .table tr {
            border: 1px solid #e9ecef;
        }

        .table td,
        th {
            border: 1px solid #ececec;
            color: #555 !important;

        }
    </style>
    <div class="user-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-bx">
                        <div class="row">
                            @include('frontend.dashboard-nav')
                            <div class="col-md-8">
                                <h3>Edit Playlist</h3>
                                <br>
                                <form method="POST" action="{{ route('updatePlaylist', $playlist->id) }}">
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @csrf

                                    <div class="input-group w3_w3layouts">
                                        <span>Playlist Title</span>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Playlist Title" value="{{ $playlist->title }}" required>
                                    </div>

                                    <div class="input-group w3_w3layouts">
                                        <span>Songs List</span>
                                        <select name="songs[]" class="form-control" multiple required>
                                            <option value="" disabled
                                                style="background-color: black;color: white;border-radius: 8px;">Select
                                                Songs to add into your Playlist</option>
                                            @foreach ($songs as $song)
                                                <option value="{{ $song->id }}"
                                                    {{ in_array($song->id, $playlistIds) ? 'selected' : '' }}
                                                    style="border-bottom:1px solid #b9c2cb;">{{ $song->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group w3_w3layouts">
                                        <h3>
                                            <button type="submit" class="label label-primary">
                                                Update
                                            </button>
                                        </h3>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
