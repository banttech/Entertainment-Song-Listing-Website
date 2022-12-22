@extends('layouts.frontend.app')
@section('content')
    <style>
        .lyrics_search_bar {
            width: 300px;
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
    </style>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="sub-heading">Songs</h3>
                <br>
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
                                    <th>Sr. No.</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Posted On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($songs->count() > 0)
                                    @foreach ($songs as $song)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $song->title }}</td>
                                            <td>{{ $song->author }}</td>
                                            <td>{{ Carbon\Carbon::parse($song->created_at)->format('M d, Y') }}</td>
                                            <td>
                                                <a href="{{ route('songDetail', $song->slug) }}"
                                                    class="btn btn-primary">View</a>
                                            </td>

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
    </div>

    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="col-md-3 wthree_banner_bottom_grid">
            <div class="wthree_banner_bottom_grid1">
                <img src="images/1.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_bottom_grid_pos">
                    <h4>Peter Parker / <span>DJ</span></h4>
                </div>
            </div>
            <div class="w3layouts_banner_bottom_grid">
                <h3>Rock Music</h3>
            </div>
        </div>
        <div class="col-md-3 agileits_w3layouts_banner_bottom_grid">
            <div class="hovereffect">
                <img src="images/2.jpg" alt=" " class="img-responsive" />
                <div class="overlay">
                    <h3 class="w3_instruments">Music Instruments</h3>
                    <div class="rotate">
                        <p class="group1">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </p>
                        <hr>
                        <hr>
                        <p class="group2">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="agileinfo_banner_bottom_grid">
                <div class="agileits_banner_bottom_grid1">
                    <h4 class="w3ls_color">Symphony</h4>
                    <h3>Viking Music</h3>
                    <p>Praesent suscipit nunc vel orci dictum pretium. Donec ullamcorper sagittis turpis.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 agileits_w3layouts_banner_bottom_grid">
            <div class="hovereffect">
                <img src="images/3.jpg" alt=" " class="img-responsive" />
                <div class="overlay">
                    <h3 class="w3_instruments">Music Instruments</h3>
                    <div class="rotate">
                        <p class="group1">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </p>
                        <hr>
                        <hr>
                        <p class="group2">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="agileinfo_banner_bottom_grid w3l_banner_bottom1">
                <div class="agileits_banner_bottom_grid1">
                    <h4 class="w3ls_color1">Symphony</h4>
                    <h3>Hormonica Music</h3>
                    <p>Praesent suscipit nunc vel orci dictum pretium. Donec ullamcorper sagittis turpis.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 agileits_w3layouts_banner_bottom_grid">
            <div class="hovereffect">
                <img src="images/4.jpg" alt=" " class="img-responsive" />
                <div class="overlay">
                    <h3 class="w3_instruments">Music Instruments</h3>
                    <div class="rotate">
                        <p class="group1">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </p>
                        <hr>
                        <hr>
                        <p class="group2">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="agileinfo_banner_bottom_grid w3l_banner_bottom2">
                <div class="agileits_banner_bottom_grid1">
                    <h4 class="w3ls_color2">Symphony</h4>
                    <h3>Trumpet Playing</h3>
                    <p>Praesent suscipit nunc vel orci dictum pretium. Donec ullamcorper sagittis turpis.</p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner-bottom -->
    <!-- about -->
    <div class="about">
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
    </div>
    <!-- //about -->
    <!-- features -->
    <div class="features">
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
    </div>
    <!-- //features -->
    <!-- newsletter -->
    <div class="newsletter">
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
    </div>
    <!-- //newsletter -->
    <!-- team -->
    <div class="team">
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
    </div>
    <!-- //team -->
    <!-- latest-albums -->
    <div class="latest-albums">
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
    </div>
@endsection
