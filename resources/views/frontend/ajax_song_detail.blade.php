<style>
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

    #lyrics {
        font-size: 11px;
    }

    pre#lyrics {
        text-align: left !important;
    }
</style>
<div class="col-md-12">
    <div class="song-detail-left">
        <div class="song-detail-text">
            <div class="title_heading">
                <h3>Song Title: </h3>
                <p>{{ $songs[0]->title }}</p>
            </div>
            <?php
            $author_ids = DB::table('song_has_authors')
                ->where('song_id', $songs[0]->id)
                ->pluck('author_id');
            $authors = DB::table('authors')
                ->whereIn('id', $author_ids)
                ->get();
            ?>
            <div class="author_heading">
                <h3>Author: </h3>
                <p>
                    @foreach ($authors as $key => $author)
                        {{ $author->name }}
                        @if ($key != count($authors) - 1)
                            ,
                        @endif
                    @endforeach
                </p>
            </div>
        </div>

        {{-- <div class="song_detail div_content" id="myDiv">
            <pre id="lyrics">
            {!! $songs[0]->lyrics !!} 
            </pre>
        </div> --}}

        <?php
        $bgColor = Auth::user() ? (Auth::user()->bg_color ? Auth::user()->bg_color : '#fff') : '#fff';
        $lyricsSize = Auth::user() ? (Auth::user()->lyrics_size ? Auth::user()->lyrics_size : '11') : '11';
        $lyricsColor = Auth::user() ? (Auth::user()->lyrics_color ? Auth::user()->lyrics_color : '#000') : '#000';
        $chordsColor = Auth::user() ? (Auth::user()->chords_color ? Auth::user()->chords_color : '#2159D6') : '#2159D6';
        ?>

        <div id="myDiv" class="song_detail div_content" style="background-color: {{ $bgColor }};">
            <pre data-key="{{ $songs[0]->family_chords }}" id="lyrics"
                style="font-size: {{ $lyricsSize }}px; background-color: {{ $bgColor }}; color: {{ $lyricsColor }};">
                {{ $songs[0]->lyrics }}
            </pre>
        </div>

    </div>
    <div class="song_btn">
        <div class="col-md-4 text-center">
            <h4>AUTO SCROLL</h4>
            <p>Speed</p>
            <ul>
                <li><span id="increase_scroll_speed"><i class="fa fa-plus"></i></span></li>
                <li><span id="decrease_scroll_speed"><i class="fa fa-minus"></i></span></li>
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
                    <input class="bg_black bgcolor" type="color" id="bgcolor" value="{{ $bgColor }}">
                </li>
                <li><label>LYRIC</label>
                    <input class="bg_white bgcolor" type="color" id="lyricsColor" value="{{ $lyricsColor }}">
                </li>
                <li><label>CHORD</label>
                    <input class="bg_white bgcolor" type="color" id="chordsColor" value="{{ $chordsColor }}">
                </li>
            </ul>
        </div>


    </div>
    <div class="col-md-12 text-center pagination_arrow">
        @if ($songs->previousPageUrl() != null)
            <a href="{{ $songs->previousPageUrl() }}" class="btn btn-primary">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
        @else
            <a href="#" class="btn btn-primary disabled">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
        @endif
        @if ($songs->nextPageUrl() != null)
            <a href="{{ $songs->nextPageUrl() }}" class="btn btn-primary">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        @else
            <a href="#" class="btn btn-primary disabled">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        @endif
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
    });

    $(document).ready(function() {
        var color = <?php echo json_encode($chordsColor); ?>;
        setTimeout(function() {
            $("#lyrics span span").css("color", color);
        }, 50);
    });
</script>

<script type="text/javascript" src="https://jquery-chord-transposer.vercel.app/jquery.transposer.js"></script>
<script type="text/javascript">
    $(function() {
        $("pre").transpose();
    });
</script>
