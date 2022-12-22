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
</style>
<div class="col-md-12">
    <div class="song-detail-left">
        <div class="song-detail-text">
            <div class="title_heading">
                <h3>Song Title: </h3>
                <p>{{ $songs[0]->title }}</p>
            </div>
            <div class="author_heading">
                <h3>Author: </h3>
                <p>{{ $songs[0]->author }}</p>
            </div>
        </div>

        <div class="song_detail div_content" id="myDiv">
            <pre id="lyrics">
            {!! $songs[0]->lyrics !!} 
            </pre>
        </div>

    </div>
    {{-- <div class="song_btn">
        <div class="col-md-4 text-center">
            <h4>AUTO SCROLL</h4>
            <p>Speed</p>
            <ul>
                <li onclick="handle('increase')"><span id="scroll_down"><i class="fa fa-plus"></i></span>
                </li>
                <li onclick="handle('decrease')"><span id="scroll_up"><i class="fa fa-minus"></i></span>
                </li>
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
                    <input class="bg_black bgcolor" type="color" id="bgcolor" value="#000000">
                </li>
                <li><label>LYRIC</label>
                    <input class="bg_white bgcolor" type="color" id="lyricsColor" value="#000000">
                </li>
            </ul>
        </div>


    </div> --}}
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
    }

    // zoom in and zoom out on song_detail div by using transform css property
    // $(document).ready(function() {
    //     var zoom = 1;
    //     $("#zoom_in").click(function() {
    //         zoom = zoom + 0.1;
    //         $("#lyrics").css("transform", "scale(" + zoom + ")");
    //     });
    //     $("#zoom_out").click(function() {
    //         zoom = zoom - 0.1;
    //         $("#lyrics").css("transform", "scale(" + zoom + ")");
    //     });
    // });

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
