@if ($songs->count() > 0)
    @foreach ($songs as $song)
        <div class="col-md-3 col-sm-4 hover_effect w3ls_banner_bottom_grid authors_list author_list_style">
            <img class="author__img" src="{{ url('admin_assets/images/songs/' . $song->image) }}" alt=""
                class="img-responsive" style="border-radius:5px;" />
            <div class="overlay_songs">
                <div class="Song_box_shadow">
                    <div style="line-height: 19px; height: 34px;">
                        <a style="color: #f5b541;" class="Song-Content" href="{{ route('songDetail', $song->slug) }}">
                            {{ strlen($song->title) > 45 ? substr($song->title, 0, 45) . '...' : $song->title }}
                        </a>
                    </div>
                    <div class="Show_contant_val">
                        <span style="color: #f5b541;">Categories:</span>
                        <?php $catIds = DB::table('song_has_categories')
                            ->where('song_id', $song->id)
                            ->pluck('category_id');
                        $categories = DB::table('music_categories')
                            ->whereIn('id', $catIds)
                            ->get();
                        ?>
                        <span>
                            @foreach ($categories as $key => $category)
                                <a href="{{ route('categorySongs', $category->slug) }}" style="font-size: 12px;">
                                    {{ $category->name }}<?php if ($key != count($categories) - 1) {
                                        echo ',';
                                    } ?>
                                </a>
                            @endforeach
                        </span>
                    </div>
                    <div class="song_listing_name">
                        <span class="Song_by">Authors:</span>
                        <?php
                        $author_ids = DB::table('song_has_authors')
                            ->where('song_id', $song->id)
                            ->pluck('author_id');
                        $authors = DB::table('authors')
                            ->whereIn('id', $author_ids)
                            ->get();
                        ?>
                        <span>
                            @foreach ($authors as $key => $author)
                                <a href="{{ route('authorSongs', $author->slug) }}" style="font-size: 12px;">
                                    {{ $author->name }}<?php if ($key != count($authors) - 1) {
                                        echo ',';
                                    } ?>
                                </a>
                            @endforeach
                        </span>
                    </div>
                    <div class="song_posted_sec">
                        <span class="Song_by">Posted On:</span>
                        <a style="font-size: 12px; font-weight: 600;">
                            {{ Carbon\Carbon::parse($song->created_at)->format('M d, Y') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
