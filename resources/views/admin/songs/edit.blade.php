@extends('layouts.admin.app')

@section('content')
    <style>
        .input-space textarea {
            width: auto !important;
        }

        button.update_btn {
            width: 170px !important;
            border-radius: 10px !important;
        }

        .authors_list {
            height: 300px !important;
            border-radius: 30px 0px 0px 0px !important;
        }

        .authors_list option {
            padding: 6px 0;
            border-bottom: 1px solid #b9c2cb;
            font-size: 16px;
        }

        .category_list {
            height: 300px !important;
            border-radius: 30px 0px 0px 0px !important;
        }

        .category_list option {
            padding: 6px 0;
            border-bottom: 1px solid #b9c2cb;
            font-size: 16px;
        }
    </style>
    <div class="white-bx">
        <h3 class="sub-heading">{{ $pageTitle }}</h3>

        <form action="{{ route('songs.update', ['id' => $song->id]) }}" method="POST" enctype="multipart/form-data">
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
                        <label for="">Song Title*</label>
                        <input type="text" name="title" value="{{ $song->title }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">Family Chords*</label>
                        <select name="family_chords" required>
                            <option value="">Select family chords</option>
                            <option value="Ab" {{ $song->family_chords == 'Ab' ? 'selected' : '' }}>Ab</option>
                            <option value="A" {{ $song->family_chords == 'A' ? 'selected' : '' }}>A</option>
                            <option value="A#" {{ $song->family_chords == 'A#' ? 'selected' : '' }}>A#</option>
                            <option value="Bb" {{ $song->family_chords == 'Bb' ? 'selected' : '' }}>Bb</option>
                            <option value="B" {{ $song->family_chords == 'B' ? 'selected' : '' }}>B</option>
                            <option value="C" {{ $song->family_chords == 'C' ? 'selected' : '' }}>C</option>
                            <option value="C#" {{ $song->family_chords == 'C#' ? 'selected' : '' }}>C#</option>
                            <option value="Db" {{ $song->family_chords == 'Db' ? 'selected' : '' }}>Db</option>
                            <option value="D" {{ $song->family_chords == 'D' ? 'selected' : '' }}>D</option>
                            <option value="D#" {{ $song->family_chords == 'D#' ? 'selected' : '' }}>D#</option>
                            <option value="Eb" {{ $song->family_chords == 'Eb' ? 'selected' : '' }}>Eb</option>
                            <option value="E" {{ $song->family_chords == 'E' ? 'selected' : '' }}>E</option>
                            <option value="F" {{ $song->family_chords == 'F' ? 'selected' : '' }}>F</option>
                            <option value="F#" {{ $song->family_chords == 'F#' ? 'selected' : '' }}>F#</option>
                            <option value="Gb" {{ $song->family_chords == 'Gb' ? 'selected' : '' }}>Gb</option>
                            <option value="G" {{ $song->family_chords == 'G' ? 'selected' : '' }}>G</option>
                            <option value="G#" {{ $song->family_chords == 'G#' ? 'selected' : '' }}>G#</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">Author*</label>
                        <select name="authors[]" class="form-control authors_list" multiple required>
                            <option value="" disabled style="background-color: #7C1DCF; color: white; padding: 5px;">
                                Select Authors
                            </option>
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}"
                                    {{ in_array($author->id, $songAuthors) ? 'selected' : '' }}>
                                    {{ $author->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">Select Music Category*</label>
                        <select name="categories[]" class="form-control category_list" multiple required>
                            <option value="" disabled style="background-color: #7C1DCF; color: white; padding: 5px;">
                                Select Music Category
                            </option>
                            @foreach ($music_categories as $music_categorie)
                                <option value="{{ $music_categorie->id }}"
                                    {{ in_array($music_categorie->id, $songCategories) ? 'selected' : '' }}>
                                    {{ $music_categorie->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-space">
                        <label for="">Song Lyrics*</label>
                        <textarea name="lyrics" id="lyrics" cols="114" rows="50">{{ $song->lyrics }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">SEO Title*</label>
                        <input type="text" name="seo_title" value="{{ $song->seo_title }}" required />
                    </div>
                    @error('seo_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">Song Image</label>
                        <input type="file" name="image" value="{{ old('image') }}" />
                        <br />
                        <img class="mt-2" src="{{ url('admin_assets/images/songs/' . $song->image) }}" alt=" "
                            width="100px" />
                    </div>
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <div class="input-space">
                        <label for="">SEO Description*</label>
                        <textarea name="seo_description" id="seo_description" cols="114" rows="7" required>{{ $song->seo_description }}</textarea>
                    </div>
                    @error('seo_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn-area update_btn">Update</button>
        </form>
    </div>
@endsection
