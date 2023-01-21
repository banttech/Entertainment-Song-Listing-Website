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
            color: #f5b541;
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

        .action_btns {
            display: flex;
            justify-content: space-between;
        }

        .modal-body {
            height: 235px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .lyrics_search_bar {
            width: 300px;
            padding: 7px;
        }

        .btn-area {
            padding: 8px 20px;
            background: #f5b541;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-area:hover {
            background: #f5b541;
        }

        .song_search {
            display: flex;
        }

        .song_search button {
            margin-left: 10px;
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
                                <h3>All Songs</h3>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="{{ route('userDashboard') }}" method="GET">
                                            <div class="row">
                                                <div class="col-md-12 song_search">
                                                    <div class="input-space">
                                                        <label for="">Search</label>
                                                        <input type="text" name="search" class="lyrics_search_bar"
                                                            value="{{ request()->search }}"
                                                            placeholder="Search by Title/Author/Lyrics" />
                                                    </div>
                                                    <button type="submit" class="btn-area">Search</button>
                                                </div>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="user-dashboard-right">
                                    <div class="card-body">
                                        <div class="">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Song Title</th>
                                                        <th>Author</th>
                                                        <th>Posted On</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if (count($songs) == 0)
                                                        <tr>
                                                            <td colspan="5" class="text-center">No Records Found</td>
                                                        </tr>
                                                    @endif
                                                    @foreach ($songs as $song)
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('songDetail', $song->slug) }}">{{ $song->title }}
                                                                </a>
                                                            </td>
                                                            <?php
                                                            $author_ids = DB::table('song_has_authors')
                                                                ->where('song_id', $song->id)
                                                                ->pluck('author_id');
                                                            $authors = DB::table('authors')
                                                                ->whereIn('id', $author_ids)
                                                                ->get();
                                                            ?>
                                                            <td>
                                                                @foreach ($authors as $key => $author)
                                                                    <a href="{{ route('authorSongs', $author->slug) }}">
                                                                        {{ $author->name }}
                                                                    </a>
                                                                    @if ($key != count($authors) - 1)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                            <td>{{ Carbon\Carbon::parse($song->created_at)->format('M d, Y') }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Song In Playlist</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hiddxen="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select name="" id="">
                        <option value="">Select Playlist</option>
                        <option value="">Playlist 1</option>
                        <option value="">Playlist 2</option>
                        <option value="">Playlist 3</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
