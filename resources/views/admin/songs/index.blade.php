  @extends('layouts.admin.app')

  @section('content')
      <style>
          .resp td {
              text-align: center;
              font-size: 20px;
          }

          .action_btns {
              display: flex;
              justify-content: center;
              align-items: center;
          }

          button.search_btn {
              border-radius: 10px !important;
              padding: 10px 20px !important;
          }

          .manage_song {
              display: flex;
              justify-content: center;
              align-items: center
          }
      </style>
      <div class="app-title">
          <div>
              <h1>{{ $pageTitle }}</h1>
          </div>
      </div>

      <form action="{{ route('songs.search') }}" method="GET">
          <div class="row manage_song">
              <div class="col-md-4">
                  <div class="input-space">
                      <label for="">Search</label>
                      <input type="text" name="search" value="{{ old('search') }}" />
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="input-space">
                      <label for="">Search By</label>
                      <select name="search_by">
                          <option value="title">Title</option>
                          <option value="author">Author</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="input-space">
                      <label for="">Sort By</label>
                      <select name="sort_by">
                          <option value="asc">Ascending</option>
                          <option value="desc">Descending</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-2">
                  <button type="submit" class="btn-area search_btn">Search</button>
              </div>
          </div>


      </form>
      <br>

      <a href="{{ route('songs.create') }}" class="btn btn-primary" style="float:right;margin:10px;">Add Song</a>


      <table class="resp">

          <thead>
              <tr>
                  <th scope="col" width="33%">Song Title</th>
                  <th scope="col" width="34%">Author</th>
                  <th scope="col" width="34%">Posted On</th>
                  <th scope="col" width="34%">Actions</th>

              </tr>
          </thead>
          <tbody>

              @if (Session::has('success'))
                  <div class="alert alert-success">
                      {{ Session::get('success') }}
                  </div>
              @endif
              @if ($songs->count() == 0)
                  <tr>
                      <td colspan="5">No records found</td>
                  </tr>
              @endif
              @foreach ($songs as $key => $song)
                  <tr>
                      <td style="font-size: 15px;">{{ $song->title }}</td>
                      <?php
                      $author_ids = DB::table('song_has_authors')
                          ->where('song_id', $song->id)
                          ->pluck('author_id');
                      $authors = DB::table('authors')
                          ->whereIn('id', $author_ids)
                          ->get(); ?>
                      <td style="font-size: 15px;">
                          @foreach ($authors as $key => $author)
                              {{ $author->name }}
                              @if ($key != count($authors) - 1)
                                  ,
                              @endif
                          @endforeach
                      </td>
                      <td style="font-size: 15px;">{{ Carbon\Carbon::parse($song->created_at)->format('M d, Y') }}</td>
                      <td class="action_btns" style="font-size: 15px;">
                          <a href="{{ route('songs.edit', ['id' => $song->id]) }}" class="btn btn-delete">Edit</a> |
                          <a href="{{ route('songs.delete', ['id' => $song->id]) }}" class="btn btn-delete"
                              onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                      </td>

                  </tr>
              @endforeach
          </tbody>
      </table>
      <div class="text-center">
          {{ $songs->links() }}
      </div>
  @endsection
