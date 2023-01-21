@extends('layouts.frontend.app')
@section('content')
    <style>
        .song_heaidng {
            margin-bottom: 10px;
            font-family: 'Roboto';
            font-weight: 600;
            margin-left: 20px;
        }

        .author_name {
            font-family: 'Roboto';
            font-weight: 400;
            font-size: 19px;
        }

        .songs_listing {
            margin: 50px 0;
        }

        .song_search_form {
            margin-left: 22px;
        }

        .lyrics_search_bar {
            width: 350px;
            padding: 7px;
        }

        .btn-area {
            padding: 8px 20px;
            background: #dd5680;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-area:hover {
            background: #cc295c;
        }

        .author__img {
            width: 100%;
            height: 225px;
        }

        .authors_list {
            margin-top: 20px;
            padding: 5px;
        }

        .author_list_style {
            overflow: inherit;
            height: 290px;
        }

        .author_row_style {
            margin-left: 15px;
            margin-right: 15px;
            margin-bottom: 50px;
        }

        .authors_list .author__name {
            color: #fff;
        }

        .categories_list {
            margin-top: 20px;
        }

        .music_cat_sec h3 {
            margin: 40px 0 20px 0;
        }

        .agileits_banner_bottom_grid1 {
            padding: 0.5em !important;
        }

        .agileinfo_banner_bottom_grid h3 {
            height: 39px;
            font-size: 1.2rem !important;
        }

        .agileits_banner_bottom_grid1 h3 a {
            color: #fff;
        }

        .agileinfo_banner_bottom_grid p {
            line-height: 1.3rem !important;
            height: 150px;
        }

        .hovereffect1:hover .overlay {
            background: none !important;
        }

        .hover_effect .overlay_songs {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 5%;
            top: 0;
            margin-top: 20px;
            -webkit-transition: all 0.4s cubic-bezier(0.88, -0.99, 0, 1.81);
            transition: all 0.4s cubic-bezier(0.88, -0.99, 0, 1.81);
        }

        .hover_effect .Song_box_shadow {
            text-transform: capitalize;
            letter-spacing: 2px;
            color: #fff;
            text-align: center;
            z-index: 100;
            position: absolute;
            font-size: 1.3em;
            padding: 5px;
            height: 166px;
            width: 90%;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background: #738f91;
            border-radius: 10px;
            transform: translateY(100px);
            transition: all 0.4s cubic-bezier(0.88, -0.99, 0, 1.81);
        }

        .load_more_btn button {
            background-color: #f5b541;
            border-color: #f5b541;
            color: #fff !important;
        }

        .Song-Content {
            color: #f5b541;
            font-size: 16px;
            height: auto;
            font-weight: bold;
        }

        .Song-Content:hover {
            color: #f5b541;
        }

        .Song_by {
            color: #253D4E;
            font-weight: 700;
        }

        .song_posted_sec {
            padding-left: 10px;
            text-align: initial;
            font-size: 16px;
            font-family: 'Roboto';
        }

        .song_posted_sec span {
            font-size: 16px;
            font-family: 'Roboto';
            font-weight: 600;
            color: #f5b541;
        }

        .load_more_songs {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .song_title {
            margin: 27px 0px !important;
            text-align: left;
            padding-left: 10px;
        }
    </style>

    {{-- <div class="container">
        <div class="row songs_listing">
            <div class="col-md-12">
                <h3 class="song_heaidng">Category Name: <span class="author_name">
                        {{ ucwords(str_replace('-', ' ', $categoryname)) }}
                    </span></h3>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Songs</th>
                                    <th>Posted On</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($songs->count() > 0)
                                    @foreach ($songs as $song)
                                        <tr>
                                            <td>
                                                <a href="{{ route('songDetail', $song->slug) }}">
                                                    {{ $song->title }}
                                                </a>
                                            </td>
                                            <td>{{ Carbon\Carbon::parse($song->created_at)->format('M d, Y') }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4">No songs found...!!</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $songs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid Song_details_view">
        <div class="container music_cat_sec">
            <h3 class="agileits_w3layouts_head"><span>Songs</span></h3>
        </div>
        <h3 class="song_heaidng">Category Name: <span class="author_name">
                {{ ucwords(str_replace('-', ' ', $categoryname)) }}
            </span></h3>
        @if ($songs->count() > 0)
            <div class="row author_row_style" id="load-more-songs">
                @foreach ($songs as $song)
                    <div class="col-md-3 col-sm-4 hover_effect w3ls_banner_bottom_grid authors_list author_list_style">
                        <img class="author__img" src="{{ url('admin_assets/images/songs/' . $song->image) }}" alt=""
                            class="img-responsive" style="border-radius:5px;" />
                        <div class="overlay_songs">
                            <div class="Song_box_shadow">
                                <div class="song_title">
                                    <a class="Song-Content" href="{{ route('songDetail', $song->slug) }}">
                                        {{ $song->title }}
                                    </a>
                                </div>
                                <div class="song_posted_sec">
                                    <span class="Song_by">Posted On:</span>
                                    <span
                                        style="color: #fff; font-weight: 500;">{{ Carbon\Carbon::parse($song->created_at)->format('M d, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row" style="margin: 64px 0 26px 0; text-align: center;">
                <div class="col-md-12">
                    <h3>No songs found...!!</h3>
                </div>
            </div>
        @endif
        <div class="row load_more_songs @if ($totalSongs <= 4) hidden @endif" id="load_more_button_sec">
            <div class="col-md-12">
                <div class="load_more_btn">
                    <button class="btn" onclick="loadMoreSongs()">Load More</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var songLength = 4;

        function loadMoreSongs() {
            songLength += 4;
            let csrf_token = "{{ csrf_token() }}";
            let search = $('#search').val();
            let slug = "{{ $slug }}";
            console.log(search);
            $.ajax({
                url: '/load-more-category-songs/' + slug,
                type: 'POST',
                data: {
                    _token: csrf_token,
                    songLength: songLength,
                    search: search
                },
                success: function(data) {
                    setTimeout(function() {
                        $('#load-more-songs').html(data.moreSongs);
                        if (data.remainingSongs <= 0) {
                            $('#load_more_button_sec').hide();
                        }
                    }, 500);
                }
            });
        }
    </script>
@endsection
