@extends('layouts.frontend.app')
@section('content')
    <style>
        .song-detail {
            padding: 70px 0;
            background: #595959;
        }

        .song-detail-bx {
            background: #595959;
            padding: 30px;
        }

        .song-detail-left-bx {
            padding: 30px;
        }

        .song-detail-left-top {
            display: flex;
            align-items: center;
        }

        .song-detail-left-top-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
        }

        .song-detail-left-top-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .song-detail-left-top-text h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .song-detail-left-top-text p {
            font-size: 14px;
            margin-bottom: 0;
        }

        .song-detail-left-bottom {
            padding: 30px;
        }

        .song-detail-left-bottom ul li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .song-detail-left-bottom ul li:last-child {
            margin-bottom: 0;
        }

        .song-detail-left-bottom ul li span {
            width: 100px;
            font-size: 14px;
            font-weight: 600;
        }

        .song-detail-left-bottom ul li a {
            color: #000;
        }

        .song-detail-right {
            padding: 30px;
        }

        .song-detail-right-bx {
            padding: 30px;
        }

        .song-detail-right-top {
            display: flex;
            align-items: center;
        }

        .song-detail-right-top-left {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
        }

        .song-detail-right-top-left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .song-detail-right-top-right {
            width: 100%;
        }

        .song-detail-right-top-right h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .song-detail-right-top-right p {
            font-size: 14px;
            margin-bottom: 0;
        }

        .song-detail-right-bottom {
            padding: 30px;
        }

        .song-detail-right-bottom p {
            font-size: 14px;
        }

        .btn-area {
            background: #000;
            color: #fff;
            padding: 10px 20px;
            display: inline-block;
        }

        .song-detail-text h3 {
            margin-bottom: 10px;
            color: #fff;
        }

        .song-detail-text p {
            margin-bottom: 10px;
            color: #fff;
        }

        .song_detail h4 {
            margin-bottom: 10px;
            color: #fff;
        }

        .song_btn h4 {
            color: #fff;
            font-family: inherit;
        }

        .song_detail {
            padding: 15px;
            border: 1px solid #212121;
            background: #212121;
            border-radius: 5px;
        }

        .song_detail p {
            color: #fff
        }

        .song_detail .green {
            color: #10cc2b
        }

        .song_lyric {
            margin-bottom: 15px
        }

        .song_btn {
            margin-top: 15px
        }

        .song_btn ul {
            display: inline-flex;
            list-style: none;
            margin-top: 5px;
        }

        .song_btn .bg_black {
            background: black;
            padding: 5px;
            width: 30px;
            height: 30px;
            display: block;
            color: #fff;
            text-align: center;
            cursor: pointer;
        }

        .song_btn .bg_white {
            background: white;
            padding: 5px;
            width: 30px;
            height: 30px;
            display: block;
            color: #fff;
            text-align: center;
            cursor: pointer;
        }

        .song_btn .bg_green {
            background: #00cf4b;
            padding: 5px;
            width: 30px;
            height: 30px;
            display: block;
            color: #fff;
            text-align: center;
            cursor: pointer;
        }

        .song_btn span {
            padding: 5px;
            width: 30px;
            height: 30px;
            display: block;
            background-color: #bb7e07;
            color: #fff;
            text-align: center;
            cursor: pointer;
        }

        .song_btn ul li {
            margin-right: 7px
        }

        .song_btn p {
            font-size: 14px;
            margin-bottom: 3px;
            color: #fff;
        }

        .song_btn label {
            font-size: 10px;
            color: #fff;
            font-weight: normal;
            margin-bottom: 5px;
        }

        .pagination_arrow {
            margin-top: 10px;
        }

        #divContent {
            text-align: left !important;
        }

        #controls {
            position: fixed;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);

        }

        pre {
            text-align: center !important;
            margin: 0 auto !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://jquery-chord-transposer.vercel.app/jquery.transposer.css" />
    <div class="song-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="song-detail-bx">
                        <div class="row" id="song-detail-bx">
                            @include('frontend.ajax_song_detail')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            BASE_URL = "{{ url('/') }}";
            let playlist_slug = <?php echo json_encode($playlist_slug); ?>;
            $(document).ready(function() {
                $(document).on('click', '.pagination_arrow a', function(event) {
                    event.preventDefault();
                    var page = $(this).attr('href').split('page=')[1];
                    fetch_data(page);
                });

                function fetch_data(page) {
                    $.ajax({
                        url: BASE_URL + `/playlist/${playlist_slug}?page=` + page,
                        success: function(data) {
                            $('#song-detail-bx').html(data);
                        }
                    });
                }
            });
        </script>
    @endsection
