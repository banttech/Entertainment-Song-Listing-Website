<style>
    .active {
        background: #f5f5f5;

    }

    .active a {
        color: #f5b541 !important;
    }
</style>
<div class="col-md-4">
    <div class="user-dashboard-left">
        <div class="user-dashboard-left-bx">
            <div class="user-dashboard-left-top">
                <div class="user-dashboard-left-top-img">
                    <!-- <img src="{{ asset('frontend/images/user-img.png') }}" alt=""> -->
                    <img src="https://songcl.banttechenergies.com/images/5.jpg" alt="">
                </div>
                <div class="user-dashboard-left-top-text">
                    <h3>{{ $user->name }}</h3>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
            <div class="user-dashboard-left-bottom">
                <ul>
                    <li @if (isset($pageTitle) && $pageTitle == 'Dashboard') class="active" @endif><a
                            href="{{ route('userDashboard') }}">Dashboard</a></li>
                    <li @if (isset($pageTitle) && $pageTitle == 'Profile') class="active" @endif><a
                            href="{{ route('profile') }}">Profile</a></li>
                    <li @if (isset($pageTitle) && $pageTitle == 'Playlist') class="active" @endif><a
                            href="{{ route('playlists') }}">Playlists</a></li>
                    <li><a href="{{ route('user.logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
