@extends('layouts.admin.app')

@section('content')
    <style>
        button.submit_btn {
            width: 170px !important;
            border-radius: 10px !important;
        }

        #family_chords {
            height: 203px;
            border-radius: 30px 0px 0px 0px;
        }

        #family_chords option {
            padding: 5px;
            border-bottom: 1px solid #b9c2cb;
        }
    </style>
    <div class="white-bx">
        <h3 class="sub-heading">{{ $pageTitle }}</h3>

        <form action="{{ route('songs.storeCopy') }}" method="POST">
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
                        <input type="text" name="title" value="{{ old('title') }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">Author</label>
                        <input type="text" name="author" value="{{ old('author') }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">Family Chords</label>
                        <select  name="family_chords" required>
                            <option value="">Select family chords</option>
                            <option value="Ab">Ab</option>
                            <option value="A">A</option>
                            <option value="A#">A#</option>
                            <option value="Bb">Bb</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="C#">C#</option>
                            <option value="Db">Db</option>
                            <option value="D">D</option>
                            <option value="D#">D#</option>
                            <option value="Eb">Eb</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="F#">F#</option>
                            <option value="Gb">Gb</option>
                            <option value="G">G</option>
                            <option value="G#">G#</option>
                        </select>
                    </div>
                </div>
                

                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">Song Lyrics</label>

                        <textarea name="lyrics" id="lyrics" cols="30" rows="10">{{ old('lyrics') }}</textarea>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn-area submit_btn">Submit</button>
        </form>
    </div>
@endsection
