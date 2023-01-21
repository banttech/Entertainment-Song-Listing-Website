@if ($songs->count() > 0)
    @foreach ($songs as $song)
        <div class="col-md-3 col-sm-4 hover_effect w3ls_banner_bottom_grid authors_list author_list_style">
            <img class="author__img" src="{{ url('admin_assets/images/songs/' . $song->image) }}" alt=""
                class="img-responsive" style="border-radius:5px;" />
            <div class="overlay_songs">
                <div class="Song_box_shadow">
                    <div class="song_title">
                        <a class="Song-Content" href="{{ route('songDetail', $song->slug) }}">
                            {{ $song->title }}
                        </a>
                    </div>
                    <div class="song_posted_sec">
                        <span class="Song_by">Posted On:</span>
                        <span
                            style="color: #fff; font-weight: 500;">{{ Carbon\Carbon::parse($song->created_at)->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="row" style="margin: 64px 0 26px 0; text-align: center;">
        <div class="col-md-12">
            <h3>No songs found...!!</h3>
        </div>
    </div>
@endif
