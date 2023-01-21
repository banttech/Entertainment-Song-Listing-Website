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

        .desc_character_length {
            margin-top: 6px;
            float: right;
        }
    </style>
    <div class="white-bx">
        <h3 class="sub-heading">{{ $pageTitle }}</h3>

        <form action="{{ route('music-category.store') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="">Category Name*</label>
                        <input type="text" name="name" value="{{ old('name') }}" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-space">
                        <label for="">Category Photo*</label>
                        <input type="file" name="image" value="{{ old('image') }}" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-space" style="margin-bottom: 0px;">
                        <label for="">Category Description*</label>
                        <textarea name="description" id="" cols="30" rows="10" maxlength="160"  onkeyup="countLength()">{{ old('description') }}</textarea>
                    </div>
                    <p class="desc_character_length">
                        Characters left:<span id="count">160</span>
                    </p>
                </div>
            </div>
            <button type="submit" class="btn-area submit_btn">Submit</button>
        </form>
    </div>
@endsection

<script>
    function countLength() {
        var about = document.querySelector('textarea[name="description"]').value;
        var count = document.querySelector('#count');
        count.innerHTML = 160 - about.length;
    }
</script>
