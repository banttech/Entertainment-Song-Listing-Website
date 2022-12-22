@extends('layouts.admin.app')

@section('content')
<style>
    .resp td{
        text-align: center;
        font-size: 20px;
    }
</style>
<div class="app-title">
    <div>
        <h1>{{ $pageTitle}}</h1>
    </div>
</div>

<form action="{{ route('dashboard.search') }}" method="GET">
    <div class="row">
        <div class="col-md-4">
            <div class="input-space">
                <label for="">Search</label>
                <input type="text" name="search" value="{{ old('search') }}" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-space">
                <label for="">Search By</label>
                <select name="search_by">
                    <option value="title">Title</option>
                    <option value="author">Author</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-space">
                <label for="">Sort By</label>
                <select name="sort_by">
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn-area">Search</button>
</form>
<br>
<table class="resp">

    <thead>
        <tr>
            <th scope="col" width="10%">Sr No.</th>
            <th scope="col" width="33%">Song Title</th>
            <th scope="col" width="34%">Author</th>
            <th scope="col" width="34%">Lyrics</th>
            <th scope="col" width="34%">Posted On</th>
        </tr>
    </thead>
    <tbody>

        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        @if($songs->count() == 0)
        <tr>
            <td colspan="5">No records found</td>
        </tr>
        @endif
        @foreach($songs as $key => $song)
        <tr>
            <td style="font-size: 20px;">{{ ++$key }}</td>
            <td style="font-size: 20px;" >{{ $song->title }}</td>
            <td style="font-size: 20px;">{{ $song->author }}</td>
            <td style="font-size: 20px;">{{ $song->lyrics }}</td>
            <td style="font-size: 20px;">{{ $song->created_at }}</td> 
        </tr>
        @endforeach
    </tbody>
</table>
<div class="text-center">
    {{ $songs->links() }}
</div>
@endsection
<!-- <div class="app-title">
    <div>
        <h1> Dashboard</h1>
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        <div class="ac-blc">
            <div class="calendar-icon">
                <img src="images/cl-outline.svg" alt="" />
            </div>
            <h4 class="text-left">Partner Profiles</h4>
            <div class="amt text-left">20</div>

            <a href="partner-profiles.html">View Now</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="ac-blc dark-g">
            <div class="calendar-icon">
                <img src="images/cl-outline.svg" alt="" />
            </div>
            <h4 class="text-left">User Profiles</h4>
            <div class="amt text-left">20</div>

            <a href="user-profiles.html">View Now</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="ac-blc pnkz">
            <div class="calendar-icon">
                <img src="images/car-prp.svg" alt="" />
            </div>
            <h4 class="text-left">Contact Queries</h4>
            <div class="amt text-left">20</div>

            <a href="contact-queries.html">View Now</a>
        </div>
    </div>

</div> -->