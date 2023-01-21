<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <title>{{ $pageTitle }}</title>
    <?php if(isset($seoDescription)): ?>
    <meta name="description" content="<?php echo $seoDescription; ?>">
    <?php else: ?>
    <meta name="description" content="SongCI">
    <?php endif; ?>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <!-- //js -->
    <!-- font-awesome-icons -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>

</head>

<body>
    @if (isset($pageTitle) && $pageTitle == 'Home')
        <div class="banner">
    @endif
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="{{ url('/') }}"><span
                            style="color:#f5b541;">Sym</span><span>phony</span></a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--iris">
                    <ul class="nav navbar-nav menu__list">
                        <li
                            class="menu__item @if (isset($pageTitle) && $pageTitle === 'Home') menu__item--current @else menu__item @endif">
                            <a href="{{ url('/') }}" class="menu__link">Home</a>
                        </li>
                        @if (Auth::check())
                            {{-- <li
                                class="menu__item @if (isset($pageTitle) && $pageTitle === 'Playlist') menu__item--current @else menu__item @endif">
                                <a href="{{ route('playlist') }}" class="menu__link">Playlist</a>
                            </li>
                            <li
                                class="menu__item @if (isset($pageTitle) && $pageTitle === 'Profile') menu__item--current @else menu__item @endif">
                                <a href="{{ route('profile') }}" class="menu__link">Profile</a>
                            </li> --}}
                            <li class="menu__item menu__item"><a href="{{ route('user.logout') }}"
                                    class="menu__link">Logout</a></li>
                        @else
                            <li
                                class="menu__item @if (isset($pageTitle) && $pageTitle === 'Login') menu__item--current @else menu__item @endif">
                                <a href="{{ route('login') }}" class="menu__link">Login</a>
                            </li>
                            <li
                                class="menu__item @if (isset($pageTitle) && $pageTitle === 'Register') menu__item--current @else menu__item @endif">
                                <a href="{{ route('register') }}" class="menu__link">Register</a>
                            </li>
                        @endif
                        <!-- <li class="menu__item"><a href="music.html" class="menu__link">Music</a></li>
       <li class="menu__item"><a href="gallery.html" class="menu__link">Gallery</a></li>
       <li class="dropdown menu__item">
        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
        <ul class="dropdown-menu agile_short_dropdown">
         <li><a href="icons.html">Web Icons</a></li>
         <li><a href="typography.html">Typography</a></li>
        </ul>
       </li>
       <li class="menu__item"><a href="mail.html" class="menu__link">Mail Us</a></li> -->
                    </ul>
                </nav>
            </div>
        </nav>
        @if (isset($pageTitle) && $pageTitle == 'Home')
            <div class="agile_banner_info">
                <h3>music</h3>
                <div class="agile_banner_info_pos">
                    <h2>w3layouts</h2>
                </div>
            </div>
        @endif

    </div>
    @if (isset($pageTitle) && $pageTitle == 'Home')
        </div>
    @endif
    @yield('content')

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>About Us</h3>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.</p>
                <div class="agileits_footer_grid_gallery">
                    <div class="agileits_footer_grid_gallery1">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img
                                src="{{ '/' }}images/2.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileits_footer_grid_gallery1">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img
                                src="{{ '/' }}images/3.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileits_footer_grid_gallery1">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img
                                src="{{ '/' }}images/4.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileits_footer_grid_gallery1">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img
                                src="{{ '/' }}images/7.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileits_footer_grid_gallery1">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img
                                src="{{ '/' }}images/8.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="agileits_footer_grid_gallery1">
                        <a href="#" data-toggle="modal" data-target="#myModal"><img
                                src="{{ '/' }}images/9.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>Twitter Posts</h3>
                <ul class="w3agile_footer_grid_list">
                    <li>Ut aut reiciendis voluptatibus maiores <a href="#">http://symphony@example.com</a> alias,
                        ut aut reiciendis.
                        <span><i class="fa fa-twitter" aria-hidden="true"></i>02 days ago</span>
                    </li>
                    <li>Itaque earum rerum hic tenetur a sapiente delectus <a
                            href="#">http://symphony@example1.com</a> ut aut
                        voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i>03 days ago</span></li>
                </ul>
            </div>
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>Social Media</h3>
                <ul class="agileinfo_social_icons">
                    <li><a href="#" class="facebook"><span class="fa fa-facebook"
                                aria-hidden="true"></span><i>-</i>Facebook</a></li>
                    <li><a href="#" class="twitter"><span class="fa fa-twitter"
                                aria-hidden="true"></span><i>-</i>Twitter</a></li>
                    <li><a href="#" class="google"><span class="fa fa-google-plus"
                                aria-hidden="true"></span><i>-</i>Google+</a></li>
                    <li><a href="#" class="instagram"><span class="fa fa-instagram"
                                aria-hidden="true"></span><i>-</i>Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- copy-right -->
    <div class="w3agile_copy_right">
        <div class="container">
            <p>© 2022 Symphony. All Rights Reserved | Developed and Maintained by <a href="https://www.banttech.com/"
                    target="_blank">Banttech</a></p>
        </div>
    </div>
    <!-- //copy-right -->
    <!-- bootstrap-pop-up -->
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Symphony
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-6 w3_modal_body_left">
                            <img src="images/15.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-md-6 w3_modal_body_right">
                            <h4>Suspendisse et sapien ac diam suscipit posuere</h4>
                            <p>Ut enim ad minima veniam, quis nostrum
                                exercitationem ullam corporis suscipit laboriosam,
                                nisi ut aliquid ex ea commodi consequatur? Quis autem
                                vel eum iure reprehenderit qui in ea voluptate velit
                                esse quam nihil molestiae consequatur.
                                <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                                    esse quam nihil molestiae consequatur.</i>
                                Fusce in ex eget ligula tempor placerat. Aliquam laoreet mi id felis commodo
                                interdum. Integer sollicitudin risus sed risus rutrum
                                elementum ac ac purus.
                            </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //bootstrap-pop-up -->
    <!-- flexisel -->
    <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: false,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            });

        });
    </script>
    <script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
    <!-- //flexisel -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smooth-scrolling -->
    <!-- for bootstrap working -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- //for bootstrap working -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            	};
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->
</body>

</html>
