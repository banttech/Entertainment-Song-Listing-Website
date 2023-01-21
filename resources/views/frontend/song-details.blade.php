@extends('layouts.frontend.app')
@section('content')
    <style>
        .song-detail {
            padding: 70px 0;
            background: #595959;
        }

        .song-detail-bx {
            background: #595959;
            padding-bottom: 30px;
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
            font-family: 'Roboto';
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

        #myDiv {
            overflow: auto;
            height: 600px;
            width: 100%;
            background-color: #fff;
            color: #000;
            font-size: 16px;
            padding: 10px;
            border: 1px solid #ccc;
            margin-top: 45px;
        }

        .transpose-keys {
            position: absolute;
            top: 54px;
        }

        pre {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent;
            white-space: pre;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        .bgcolor {
            padding: unset !important;
            background: unset !important;
            border: none !important;
        }

        .title_heading,
        .author_heading {
            display: flex;
            align-items: center;
        }

        .title_heading h3,
        .author_heading h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 0;
            font-family: 'Roboto';
        }

        .title_heading p,
        .author_heading p {
            font-size: 16px;
            margin: 0px;
            margin-left: 10px;
            font-family: 'Roboto';
            font-weight: 500;
        }

        .author_heading {
            margin: 10px 0px;
        }

        /* #lyrics {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        font-size: 11px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    } */


        pre#lyrics {
            text-align: left !important;
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

        .song__detail__sec {
            margin-left: 0px !important;
            margin-right: 0px !important;
        }

        @media screen and (max-width: 600px) and (min-width: 401px) {
            .transpose-keys {
                top: 9%;
            }

            .song-detail-text {
                padding-bottom: 12%;
            }

            .song-detail-bx {
                padding: 0px 10px;
            }
        }

        @media screen and (max-width: 768px) and (min-width: 601px) {
            .transpose-keys {
                top: 9%;
            }

            .song-detail-text {
                padding-bottom: 5%;
            }

            .song-detail-bx {
                padding: 0px 10px;
            }
        }

        @media screen and (max-width: 400px) and (min-width: 320px) {
            .transpose-keys {
                top: 11%;
            }

            .song-detail-text {
                padding-bottom: 22%;
            }

            .song-detail-bx {
                padding: 0px 10px;
            }

        }

        @media screen and (max-width: 768px) and (min-width: 320px) {
            .body_style_md {
                padding-left: 0px;
                padding-right: 0px;
            }

        }

        @media screen and (max-width: 975px) and (min-width: 320px) {

            .btn__styles {
                padding-bottom: 10px;
            }

        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://jquery-chord-transposer.vercel.app/jquery.transposer.css" />
    <div class="song-detail">
        <div class="container-fluid">
            <div class="row song__detail__sec">
                <div class="col-md-12">
                    <div class="song-detail-bx">
                        <div class="row">
                            <div class="col-md-12 body_style_md">
                                <div class="song-detail-left">
                                    <div class="song-detail-text">
                                        <div class="title_heading">
                                            <h3>Song Title: </h3>
                                            <p>{{ isset($song->title) ? $song->title : null }}</p>
                                        </div>
                                        <div class="author_heading">
                                            <h3>Authors: </h3>
                                            <?php
                                            $author_ids = DB::table('song_has_authors')
                                                ->where('song_id', $song->id)
                                                ->pluck('author_id');
                                            $authors = DB::table('authors')
                                                ->whereIn('id', $author_ids)
                                                ->get();
                                            ?>
                                            <p>
                                                @foreach ($authors as $key => $author)
                                                    {{ $author->name }}<?php if ($key != count($authors) - 1) {
                                                        echo ',';
                                                    } ?>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>

                                    <?php
                                    $bgColor = Auth::user() ? (Auth::user()->bg_color ? Auth::user()->bg_color : '#ffffff') : '#ffffff';
                                    $lyricsSize = Auth::user() ? (Auth::user()->lyrics_size ? Auth::user()->lyrics_size : '11') : '11';
                                    $lyricsColor = Auth::user() ? (Auth::user()->lyrics_color ? Auth::user()->lyrics_color : '#000') : '#000';
                                    $chordsColor = Auth::user() ? (Auth::user()->chords_color ? Auth::user()->chords_color : '#2159D6') : '#2159D6';
                                    ?>

                                    <div id="myDiv" class="song_detail div_content"
                                        style="background-color: {{ $bgColor }};">
                                        <pre data-key="{{ isset($song->family_chords) ? $song->family_chords : null }}" id="lyrics"
                                            style="font-size: {{ $lyricsSize }}px; background-color: {{ $bgColor }}; color: {{ $lyricsColor }};">
                                                {{ isset($song->lyrics) ? $song->lyrics : null }}
                                        </pre>
                                    </div>

                                </div>
                                <div class="song_btn">
                                    <div class="col-md-4 text-center btn__styles">
                                        <h4>AUTO SCROLL</h4>
                                        <p>Speed</p>

                                        <ul>
                                            <li><span id="increase_scroll_speed"><i class="fa fa-plus"></i></span></li>
                                            <li><span id="decrease_scroll_speed"><i class="fa fa-minus"></i></span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 text-center btn__styles">
                                        <h4>FONT SIZE</h4>
                                        <br>
                                        <ul>
                                            <li><span id="zoom_in"><i class="fa fa-plus"></i></span></li>
                                            <li><span id="zoom_out"><i class="fa fa-minus"></i></span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 text-center btn__styles">
                                        <h4>COLORS</h4>
                                        <ul>
                                            <li><label>BACK</label>
                                                <input class="bg_white bgcolor" type="color" id="bgcolor"
                                                    value="{{ $bgColor }}">
                                            </li>
                                            <li><label>LYRIC</label>
                                                <input class="bg_white bgcolor" type="color" id="lyricsColor"
                                                    value="{{ $lyricsColor }}">
                                            </li>
                                            <li><label>CHORD</label>
                                                <input class="bg_white bgcolor" type="color" id="chordsColor"
                                                    value="{{ $chordsColor }}">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                var scrollSpeed = 100;
                var scrollInterval = 0;

                $('#increase_scroll_speed').click(function() {
                    clearInterval(scrollInterval);
                    scrollSpeed = scrollSpeed - 10;
                    scrollInterval = setInterval(function() {
                        $('#myDiv').animate({
                            scrollTop: $('#myDiv').scrollTop() + 1
                        }, 0);
                    }, scrollSpeed);
                });
                $('#decrease_scroll_speed').click(function() {
                    clearInterval(scrollInterval);
                    scrollSpeed = scrollSpeed + 10;
                    if (scrollSpeed >= 100) {
                        scrollInterval = 0;
                    } else {
                        scrollInterval = setInterval(function() {
                            $('#myDiv').animate({
                                scrollTop: $('#myDiv').scrollTop() + 1
                            }, 0);
                        }, scrollSpeed);
                    }
                });
            });



            $(document).ready(function() {
                $("#zoom_in").click(function() {
                    var currentFontSize = $("#lyrics").css('font-size');
                    var currentFontSizeNum = parseFloat(currentFontSize, 10);
                    var newFontSize = currentFontSizeNum * 1.2;
                    $("#lyrics").css('font-size', newFontSize);
                    if ("{{ Auth::user() ? 'true' : 'false' }}" == 'true') {
                        $.ajax({
                            url: "{{ route('updateSongSetting') }}",
                            type: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "lyrics_size": newFontSize
                            },
                            success: function(response) {
                                console.log(response);
                            }
                        });
                    }
                    return false;
                });
                $('#zoom_out').click(function() {
                    var currentFontSize = $("#lyrics").css('font-size');
                    var currentFontSizeNum = parseFloat(currentFontSize, 10);
                    var newFontSize = currentFontSizeNum * 0.8;
                    $("#lyrics").css('font-size', newFontSize);
                    if ("{{ Auth::user() ? 'true' : 'false' }}" == 'true') {
                        $.ajax({
                            url: "{{ route('updateSongSetting') }}",
                            type: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "lyrics_size": newFontSize
                            },
                            success: function(response) {
                                console.log(response);
                            }
                        });
                    }
                    return false;
                });
            });

            // change background color of lyrics div when user change color from color picker
            $(document).ready(function() {
                $("#bgcolor").change(function() {
                    var color = $(this).val();
                    $("#lyrics").css("background-color", color);
                    $("#myDiv").css("background-color", color);
                    if ("{{ Auth::user() ? 'true' : 'false' }}" == 'true') {
                        $.ajax({
                            url: "{{ route('updateSongSetting') }}",
                            type: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "bg_color": color
                            },
                            success: function(response) {
                                console.log(response);
                            }
                        });
                    }
                });
            });

            // change color of lyrics when user change color from color picker
            $(document).ready(function() {
                $("#lyricsColor").change(function() {
                    var color = $(this).val();
                    $("#lyrics").css("color", color);
                    if ("{{ Auth::user() ? 'true' : 'false' }}" == 'true') {
                        $.ajax({
                            url: "{{ route('updateSongSetting') }}",
                            type: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "lyrics_color": color
                            },
                            success: function(response) {
                                console.log(response);
                            }
                        });
                    }
                });
            });

            // change color of chords when user change color from color picker
            $(document).ready(function() {
                $("#chordsColor").change(function() {
                    var color = $(this).val();
                    $("#lyrics span span").css("color", color);
                    if ("{{ Auth::user() ? 'true' : 'false' }}" == 'true') {
                        $.ajax({
                            url: "{{ route('updateSongSetting') }}",
                            type: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "chords_color": color
                            },
                            success: function(response) {
                                console.log(response);
                            }
                        });
                    }
                });
            });

            $(document).ready(function() {
                var color = <?php echo json_encode($chordsColor); ?>;
                setTimeout(function() {
                    $("#lyrics span span").css("color", color);
                }, 50);
            });
        </script>
        <!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script> -->
        <script type="text/javascript" src="https://jquery-chord-transposer.vercel.app/jquery.transposer.js"></script>
        <script type="text/javascript">
            $(function() {
                $("pre").transpose();
            });
        </script>
    @endsection
