<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,600;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('admin_assets/js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" defer></script>

    <script src="{{ asset('admin_assets/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin_assets/js/main.js') }}" defer></script>
    <script>
        $('#chooseFile').bind('change', function() {
            var filename = $("#chooseFile").val();
            if (/^\s*$/.test(filename)) {
                $(".file-upload").removeClass('active');
                $("#noFile").text("No file chosen...");
            } else {
                $(".file-upload").addClass('active');
                $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
            }
        });
    </script>

</head>
<style>
    .alert-success {
        width: 50%;
    }

    .name_logo {
        font-size: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 20px;
        font-weight: 600;
    }

    /* .navbar-brand:after {
        content: '';
        background: url(../images/1.png) no-repeat 0px 0px;
        width: 40px;
        height: 94px;
        position: absolute;
        transform: rotate(35deg);
        -webkit-transform: rotate(35deg);
        -moz-transform: rotate(35deg);
        -o-transform: rotate(35deg);
        -ms-transform: rotate(35deg);
    }

    .navbar-header {
        display: flex;
        justify-content: center;
        align-items: center;
    } */
</style>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
        <a class="navbar-brand name_logo" href="{{ route('songs.index') }}"><span
                style="color:#cc295c;">Sym</span><span>phony</span></a>

        {{-- <div class="navbar-header navbar-left">
            <a class="navbar-brand" href="https://songcl.banttechenergies.com">
                <span style="color:#cc295c;">Sym</span><span>phony</span>
            </a>
        </div> --}}

        <!-- Sidebar toggle button--><a class="app-sidebar__toggle mob-view" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li class="dropdown">
                <a class="top-btn" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">Admin</a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">

                    <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <ul class="app-menu">
            {{-- <li><a class="app-menu__item @if (isset($pageTitle) && $pageTitle === 'Dashboard') active @endif" href="{{route('dashboard.index')}}"><img src="images/ic1.svg" alt=""> <span class="app-menu__label">Dashboard</span></a></li> --}}
            <li><a class="app-menu__item @if (isset($pageTitle) && $pageTitle === 'Manage Songs') active @endif"
                    href="{{ route('songs.index') }}"><img src="images/ic1.svg" alt=""> <span
                        class="app-menu__label">Songs</span></a></li>
            <li><a class="app-menu__item @if (isset($pageTitle) && $pageTitle === 'Manage Users') active @endif"
                    href="{{ route('users.index') }}"><img src="images/ic1.svg" alt=""> <span
                        class="app-menu__label">Users</span>
                </a>
            </li>
            <li><a class="app-menu__item @if (isset($pageTitle) && $pageTitle === 'Manage Authors') active @endif"
                    href="{{ route('authors.index') }}"><img src="images/ic1.svg" alt=""> <span
                        class="app-menu__label">Authors</span>
                </a>
            </li>
            <li><a class="app-menu__item @if (isset($pageTitle) && $pageTitle === 'Manage Music Category') active @endif"
                    href="{{ route('music-categories.index') }}"><img src="images/ic1.svg" alt=""> <span
                        class="app-menu__label">Music Category</span>
                </a>
            </li>
            <li><a class="app-menu__item @if (isset($pageTitle) && $pageTitle === 'Edit Profile') active @endif"
                    href="{{ route('profile.edit') }}"><img src="images/ic1.svg" alt=""> <span
                        class="app-menu__label">Profile</span></a></li>
            <li><a class="app-menu__item" href="{{ route('user.logout') }}"><img src="images/ic1.svg" alt="">
                    <span class="app-menu__label">Logout</span></a></li>
            <!-- <li class="treeview">
                <a class="app-menu__item" href="" data-toggle="treeview"><img src="images/ic4.svg" alt=""> <span class="app-menu__label">Manage Songs</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Add Songs</a></li>
                    <li><a class="treeview-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>View Songs</a></li>
                </ul>
            </li> -->
            <!--
            <li><a class="app-menu__item" href="contact-queries.html"><img src="images/ic2.svg" alt=""> <span class="app-menu__label">Contact Queries</span></a></li>
            <li><a class="app-menu__item" href="reports.html"><img src="images/ic3.svg" alt=""> <span class="app-menu__label">Reports</span></a></li> -->




        </ul>
    </aside>
    <main class="app-content">
        @yield('content')
    </main>
</body>

</html>
