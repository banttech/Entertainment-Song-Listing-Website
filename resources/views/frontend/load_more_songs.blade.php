@if ($songs->count() > 0)
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
@endif
