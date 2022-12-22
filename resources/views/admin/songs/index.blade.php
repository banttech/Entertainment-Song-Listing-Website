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

		<form action="{{ route('songs.search') }}" method="GET">
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
	
		<a href="{{ route('songs.create') }}" class="btn btn-primary" style="float:right;margin:10px;">Add Song</a>
	

		<table class="resp">

		    <thead>
		        <tr>
		            <th scope="col" width="10%">Sr No.</th>
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
		            <td style="font-size: 20px;">{{ Carbon\Carbon::parse($song->created_at)->format('M d, Y') }}</td>
		            <td style="font-size: 20px;">
		                <a href="{{ route('songs.edit', ['id' => $song->id]) }}" class="btn btn-delete">Edit</a> |
						<a href="{{ route('songs.delete', ['id' => $song->id]) }}" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
		            </td>
		            
		        </tr>
		        @endforeach
		    </tbody>
		</table>
		<div class="text-center">
		    {{ $songs->links() }}
		</div>
		@endsection