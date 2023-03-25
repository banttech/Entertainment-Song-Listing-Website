@extends('layouts.frontend.app')
@section('content')
    <style>
        .song_search_form {
            margin-left: 22px;
        }

        .lyrics_search_bar {
            width: 100%;
            padding: 7px;
            border: 1px solid #f5b541;
        }

        .input-space {
            display: flex;
            margin-right: 20px;
        }

        .btn-area {
            padding: 8px 20px;
            background: #f5b541;
            color: #fff;
            border: none;
            border-radius: 0px 3px 3px 0px;
            cursor: pointer;
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
            height: 330px;
        }

        .author_row_style {
            margin-left: 45px;
            margin-right: 45px;
            margin-top: 30px;
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
            color: #f5b541;
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
            display: flex;
            justify-content: center;
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
            height: 220px;
            width: 90%;
            margin-left: -10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background: #738f91;
            border-radius: 10px;
            transform: translateY(100px);
            transition: all 0.4s cubic-bezier(0.88, -0.99, 0, 1.81);
        }


        .Song-Content {
            color: #f5b541;
            font-size: 16px;
            height: auto;
            font-weight: bold;
        }

        .Show_contant_val {
            color: white;
            padding-left: 10px;
            padding-top: 15px;
            height: 78px;
            text-align: initial;
            line-height: 16px;
            overflow: hidden;
        }

        .Show_contant_val span {
            font-size: 16px;
            font-family: 'Roboto';
            font-weight: 600;
        }

        .Show_contant_val p {
            color: green;
            margin-left: 10px;
        }

        .song_listing_name {
            text-align: left;
            padding-left: 10px;
            padding-top: 10px;
            height: 70px;
            line-height: 16px;
            overflow: hidden;
        }

        .song_listing_name span {
            font-size: 16px;
            font-family: 'Roboto';
            font-weight: 600;
        }

        .Song_by {
            color: #f5b541;
            font-weight: 700;
        }

        .Song_box_shadow a {
            color: #fff
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
        }

        .load_more_songs {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .load_more_btn button {
            background-color: #f5b541;
            border-color: #f5b541;
            color: #fff !important;
        }

        .table-dark {
            background-color: #000;
        }

        .table-dark .thead-dark th {
            background-color: #1F1F1F;
            border: none;
            color: #A99C86;
        }

        .table-dark tbody td {
            border-bottom: 2px solid #1F1F1F;
        }
    </style>
    <br>
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('home') }}" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-space">
                                        <label for="">Search</label>
                                        <input type="text" name="search" class="lyrics_search_bar"
                                            value="{{ request()->search }}" placeholder="Search by Title/Author/Lyrics" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-space">
                                        <button type="submit" class="btn-area">Search</button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
                <br> <br> <br>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Music Category</th>
                                    <th>Author</th>
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
                                            <?php $catIds = DB::table('song_has_categories')
                                                ->where('song_id', $song->id)
                                                ->pluck('category_id');
                                            $categories = DB::table('music_categories')
                                                ->whereIn('id', $catIds)
                                                ->get();
                                            ?>
                                            <td>
                                                @foreach ($categories as $key => $category)
                                                    <a href="{{ route('categorySongs', $category->slug) }}">
                                                        {{ $category->name }}
                                                    </a>
                                                    @if ($key != count($categories) - 1)
                                                        ,
                                                    @endif
                                                @endforeach
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

        <h3 class="agileits_w3layouts_head"><span>Songs</span></h3>

        <div class="row">
            <div class="col-md-12">
                <form class="song_search_form" action="{{ route('home') }}" method="GET">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Search</label>
                            <div class="input-space">

                                <input type="text" name="search" class="lyrics_search_bar"
                                    value="{{ request()->search }}" placeholder="Search by Title/Author/Lyrics"
                                    id="search" /><button type="submit" class="btn-area">Search</button>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
        @if ($songs->count() > 0)
            <div class="row author_row_style" id="load-more-songs">

                <table class="table table-dark mt-5">
                    <thead class="thead-dark">
                        <tr>
                            <th>ARTIST</th>
                            <th>SONG</th>
                            <th>DATE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($songs as $song)
                            <tr>
                                <td>
                                    <?php $author_ids = DB::table('song_has_authors')
                                        ->where('song_id', $song->id)
                                        ->pluck('author_id');
                                    $authors = DB::table('authors')
                                        ->whereIn('id', $author_ids)
                                        ->get();
                                    ?>
                                    @foreach ($authors as $key => $author)
                                        <a href="{{ route('authorSongs', $author->slug) }}" style="color: #D2CFD1;">
                                            {{ $author->name }} </a>
                                        @if ($key != count($authors) - 1)
                                            ,
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('songDetail', $song->slug) }}" style="color: #CDAC33">
                                        {{ $song->title }}
                                    </a>
                                </td>
                                <td style="color: #655F5A;">{{ Carbon\Carbon::parse($song->created_at)->format('M d, Y') }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        @else
            <div class="row" style="margin: 64px 0 26px 0; text-align: center;">
                <div class="col-md-12">
                    <h3>No songs found...!!</h3>
                </div>
            </div>
        @endif
        <div class="row load_more_songs @if ($totalSongs < 15) hidden @endif" id="load_more_button_sec">
            <div class="col-md-12">
                <div class="load_more_btn">
                    <button class="btn " onclick="loadMoreSongs()">Load More</button>
                </div>
            </div>
        </div>
    </div>

    <!-- banner-bottom -->
    {{-- <div class="banner-bottom">
        <div class="container music_cat_sec">
            <h3 class="agileits_w3layouts_head"><span>Music Categories</span></h3>
        </div>
        @foreach ($musicCategories as $musicCategory)
            <div class="col-md-3 agileits_w3layouts_banner_bottom_grid categories_list">
                <div class="hovereffect">
                    <img class="img-responsive"
                        src="{{ url('admin_assets/images/music-categories/' . $musicCategory->image) }}" alt=" "
                        style="width: 100%; height: 205px;" />
                </div>
                <div class="agileinfo_banner_bottom_grid">
                    <div class="agileits_banner_bottom_grid1">
                        <h3>
                            <a href="{{ route('categorySongs', $musicCategory->slug) }}">
                                {{ strlen($musicCategory->name) > 30 ? substr($musicCategory->name, 0, 30) . '...' : $musicCategory->name }}
                            </a>
                        </h3>
                        <p>{{ $musicCategory->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="clearfix"></div>
    </div> --}}
    <!-- //banner-bottom -->

    <!-- about -->
    {{-- <div class="about">
        <div class="container">
            <div class="w3_agile_about_grids">
                <div class="col-md-6 w3_agile_about_grid_left">
                    <img src="images/5.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 w3_agile_about_grid_right">
                    <h3>Welcome to symphony</h3>
                    <h4>Music Album</h4>
                    <p>Cras eu erat nec velit viverra ornare. Aenean semper, felis in euismod suscipit
                        Fusce viverra magna nulla, ac accumsan tortor consectetur eget. Fusce quis diam
                        aliquet, sodales lorem a, convallis ante. Praesent ultrices volutpat tortor.
                        <span>Nam tempus odio diam, et auctor enim ullamcorper a. Sed tempus, ligula eu
                            rhoncus mollis, purus felis lobortis nulla, sit amet tristique nibh risus vel enim.</span>
                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div> --}}
    <!-- //about -->

    <!-- features -->
    {{-- <div class="features">
        <div class="container">
            <div class="col-md-6 agile_features_left">
                <img src="images/7.jpg" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 agile_features_right">
                <p><a href="mailto:symphony@example.com">Symphony@example.com</a>
                    Sed tempus, ligula eu rhoncus mollis, purus.</p>
                <h4>Opening Timings</h4>
                <ul>
                    <li><span>Monday</span>: 10:00 AM - 5:00 PM</li>
                    <li><span>Tuesday</span>: 10:00 AM - 5:00 PM</li>
                    <li><span>Wednesday</span>: 10:00 AM - 5:00 PM</li>
                    <li><span>Saturday</span>: 8:00 AM - 3:00 PM</li>
                    <li><span>Sunday</span>: Closed</li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div> --}}
    <!-- //features -->

    <!-- newsletter -->
    {{-- <div class="newsletter">
        <div class="container">
            <div class="col-md-6 w3_agile_newsletter_left">
                <p>Subscribe Newsletter</p>
            </div>
            <div class="col-md-6 w3_agile_newsletter_right">
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Email..." required="">
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div> --}}
    <!-- //newsletter -->






    {{-- <div class="latest-albums">
        <div class="container">
            <h3 class="agileits_w3layouts_head"><span>Our Authors</span></h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach ($songAuthors as $author)
                    <div class="col-md-3 hovereffect1 agileits_w3layouts_banner_bottom_grid authors_list">
                        <img class="author__img" src="{{ url('admin_assets/images/authors/', $author->image) }}"
                            alt="" class="img-responsive" />
                        <div class="overlay">
                            <h4>
                                <a class="author__name"
                                    href="{{ route('authorSongs', $author->slug) }}">{{ $author->name }}</a>
                            </h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <!-- team -->
    {{-- <div class="team">
        <div class="col-md-3 agile_team_left">
            <h3>Our DJ's</h3>
        </div>
        <div class="col-md-9 agile_team_grid">
            <ul id="flexiselDemo1">
                <li>
                    <div class="hovereffect1 w3ls_banner_bottom_grid">
                        <img src="images/7.jpg" alt=" " class="img-responsive" />
                        <div class="overlay">
                            <h4>Robert Ali</h4>
                            <ul class="social_agileinfo">
                                <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hovereffect1 w3ls_banner_bottom_grid">
                        <img src="images/10.jpg" alt=" " class="img-responsive" />
                        <div class="overlay">
                            <h4>Laura Thomas</h4>
                            <ul class="social_agileinfo">
                                <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hovereffect1 w3ls_banner_bottom_grid">
                        <img src="images/8.jpg" alt=" " class="img-responsive" />
                        <div class="overlay">
                            <h4>Michael Roy</h4>
                            <ul class="social_agileinfo">
                                <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hovereffect1 w3ls_banner_bottom_grid">
                        <img src="images/9.jpg" alt=" " class="img-responsive" />
                        <div class="overlay">
                            <h4>Jonathan Carl</h4>
                            <ul class="social_agileinfo">
                                <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> --}}
    <!-- //team -->

    <!-- latest-albums -->
    {{-- <div class="latest-albums">
        <div class="container">
            <h3 class="agileits_w3layouts_head">Our Latest released <span>albums</span></h3>
            <p class="w3_agileits_para">Quisque faucibus vel leo a luctus.</p>
            <div class="wthree_latest_albums_grids">
                <div class="col-md-4 wthree_latest_albums_grid_left">
                    <figure class="effect-julia">
                        <img src="images/14.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <div class="w3l_banner_figure">
                                <p>Ut ac gravida quam id ornare</p>
                                <p>Nullam imperd scelerisque ullamcorper</p>
                                <p>Praesent pellentesque neque feugiat</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 wthree_latest_albums_grid_left">
                    <figure class="effect-julia">
                        <img src="images/13.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <div class="w3l_banner_figure">
                                <p>Ut ac gravida quam id ornare</p>
                                <p>Nullam imperd scelerisque ullamcorper</p>
                                <p>Praesent pellentesque neque feugiat</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 wthree_latest_albums_grid_left">
                    <figure class="effect-julia">
                        <img src="images/15.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <div class="w3l_banner_figure">
                                <p>Ut ac gravida quam id ornare</p>
                                <p>Nullam imperd scelerisque ullamcorper</p>
                                <p>Praesent pellentesque neque feugiat</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div> --}}

    <script>
        var songLength = 14;

        function loadMoreSongs() {
            songLength += 15;
            let csrf_token = "{{ csrf_token() }}";
            let search = $('#search').val();
            console.log(search);
            $.ajax({
                url: '/load-more-songs',
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
