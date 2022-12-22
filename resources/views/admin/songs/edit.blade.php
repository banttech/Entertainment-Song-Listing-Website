@extends('layouts.admin.app')

@section('content')
<div class="white-bx">
    <h3 class="sub-heading">{{ $pageTitle }}</h3>

    <form action="{{ route('songs.update', ['id' => $song->id]) }}" method="POST">
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">Song Title</label>
                    <input type="text" name="title" value="{{$song->title}}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">Author</label>
                    <input type="text" name="author" value="{{$song->author}}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">Song Lyrics</label>
                    <textarea name="lyrics" id="lyrics" cols="30" rows="10">{{$song->lyrics}}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn-area">Update</button>
    </form>
</div>
@endsection