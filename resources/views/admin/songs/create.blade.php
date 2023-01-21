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

        <form action="{{ route('songs.store') }}" method="POST" enctype="multipart/form-data">
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
                        <input type="text" name="title" value="{{ old('title') }}" required />
                    </div>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">Family Chords*</label>
                        <select name="family_chords" required>
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
                        <label for="">Authors*</label>
                        <select name="authors[]" class="form-control authors_list" multiple required>
                            <option value="" disabled style="background-color: #7C1DCF; color: white; padding: 5px;">
                                Select Authors
                            </option>
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach
                        </select>
                        @error('authors')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
                                <option value="{{ $music_categorie->id }}">{{ $music_categorie->name }}</option>
                            @endforeach
                        </select>
                        @error('categories')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-space">
                        <label for="">Song Lyrics*</label>
                        <textarea name="lyrics" id="lyrics" cols="114" rows="40" required>{{ old('lyrics') }}</textarea>
                    </div>
                    @error('lyrics')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">SEO Title*</label>
                        <input type="text" name="seo_title" value="{{ old('seo_title') }}" required />
                    </div>
                    @error('seo_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">Song Image*</label>
                        <input type="file" name="image" value="{{ old('image') }}" required />
                    </div>
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <div class="input-space">
                        <label for="">SEO Description*</label>
                        <textarea name="seo_description" id="seo_description" cols="114" rows="7" required>{{ old('seo_description') }}</textarea>
                    </div>
                    @error('seo_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn-area submit_btn">Submit</button>
        </form>
    </div>
@endsection
