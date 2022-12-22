@extends('layouts.admin.app')

@section('content')
<div class="white-bx">
    <h3 class="sub-heading">{{ $pageTitle }}</h3>

    <form action="{{ route('make.store') }}" method="POST">
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
                    <label for="">Name</label>
                    <input type="text" name="name" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">Years</label>
                    <select name="year_id">
                        <option>Choose year</option>
                        @foreach($years as $key => $year)
                        <option value="{{ $year->id}}">{{ $year->year}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


        </div>
        <button type="submit" class="btn-area">Submit</button>
    </form>
</div>
@endsection