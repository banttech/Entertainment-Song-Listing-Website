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

        #myDiv {
            overflow: auto;
            height: 600px;
            width: 100%;
            background-color: #fff;
            color: #000;
            font-size: 16px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        pre {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
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
            font-family: serif;
        }

        .title_heading p,
        .author_heading p {
            font-size: 16px;
            margin: 0px;
            margin-left: 10px;
            font-family: serif;
            font-weight: 500;
        }

        .author_heading {
            margin: 10px 0px;
        }

        #myDiv * {
            font-size: 12px;
            text-align: center;
        }
        #divContent{
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="song-detail-bx">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="song-detail-left">
                                    <div class="song-detail-text">
                                        <div class="title_heading">
                                            <h3>Song Title: </h3>
                                            <p>{{ $song->title }}</p>
                                        </div>
                                        <div class="author_heading">
                                            <h3>Author: </h3>
                                            <p>{{ $song->author }}</p>
                                        </div>
                                    </div>
                                    <!-- <div class="song_detail div_content" id="myDiv">
                                        <pre id="lyrics">
                                        {{ $song->lyrics }}
                                        </pre>
                                    </div>  -->

                                    <div id="myDiv" class="song_detail div_content">
                                        <!-- <div id="divContent"> -->
                                            <pre data-key="{{ $song->family_chords }}" id="lyrics">
                                                {{ $song->lyrics }}
                                                
                                            </pre>
                                        <!-- </div> -->
                                        
                                    </div>


                                </div>
                                <div class="song_btn">
                                    <div class="col-md-4 text-center">
                                        <h4>AUTO SCROLL</h4>
                                        <p>Speed</p>
                                        <ul>
                                            <li onclick="handle('increase')"><span id="scroll_down"><i
                                                        class="fa fa-plus"></i></span></li>
                                            <li onclick="handle('decrease')"><span id="scroll_up"><i
                                                        class="fa fa-minus"></i></span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <h4>FONT SIZE</h4>
                                        <br>
                                        <ul>
                                            <li><span id="zoom_in"><i class="fa fa-plus"></i></span></li>
                                            <li><span id="zoom_out"><i class="fa fa-minus"></i></span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <h4>COLORS</h4>
                                        <ul>
                                            <li><label>BACK</label>
                                                <input class="bg_black bgcolor" type="color" id="bgcolor"
                                                    value="#000000">
                                            </li>
                                            <li><label>LYRIC</label>
                                                <input class="bg_white bgcolor" type="color" id="lyricsColor"
                                                    value="#000000">
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
            var time = 50000;
            var delta = '-0.33333';
            var distance = 9000;

            function handle(status) {
                if (status == 'increase') {
                    time = time * 0.6;
                } else {
                    time = time * 1.4;
                }
                $('div#myDiv').stop().animate({
                    scrollTop: $("div#myDiv").scrollTop() - (distance * delta)
                }, time);

                $('div#myDiv').bind('scroll mousedown DOMMouseScroll mousewheel keyup', function(e) {
                    if (e.which > 0 || e.type == "mousedown" || e.type == "mousewheel") {
                        $("div#myDiv").stop();
                    }
                });

                setTimeout(function() {
                    time = 50000;
                }, time);

                $('div#myDiv').bind('scroll mousedown DOMMouseScroll mousewheel keyup', function(e) {
                    if (e.which > 0 || e.type == "mousedown" || e.type == "mousewheel") {
                        time = 50000;
                    }
                });
            }

            $(document).ready(function() {
                $("#zoom_in").click(function() {
                    var currentFontSize = $("#lyrics").css('font-size');
                    var currentFontSizeNum = parseFloat(currentFontSize, 10);
                    var newFontSize = currentFontSizeNum * 1.2;
                    $("#lyrics").css('font-size', newFontSize);
                    return false;
                });
                $('#zoom_out').click(function() {
                    var currentFontSize = $("#lyrics").css('font-size');
                    var currentFontSizeNum = parseFloat(currentFontSize, 10);
                    var newFontSize = currentFontSizeNum * 0.8;
                    $("#lyrics").css('font-size', newFontSize);
                    return false;
                });
            });

            // change background color of lyrics div when user change color from color picker
            $(document).ready(function() {
                $("#bgcolor").change(function() {
                    var color = $(this).val();
                    $("#lyrics").css("background-color", color);
                    $("#myDiv").css("background-color", color);
                });
            });

            // change color of lyrics when user change color from color picker
            $(document).ready(function() {
                $("#lyricsColor").change(function() {
                    var color = $(this).val();
                    $("#lyrics").css("color", color);
                });
            });
        </script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://jquery-chord-transposer.vercel.app/jquery.transposer.js"></script>
        <script type="text/javascript">
            $(function() {
                $("pre").transpose();
            });
        </script>
    @endsection
