@extends('layouts.admin.app')

@section('content')
<div class="white-bx">
    <h3 class="sub-heading">{{ $pageTitle }}</h3>

    <form action="{{ route('model.update', ['id' => $models->id]) }}" method="POST">
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
            <div class="col-md-12">
                <div class="input-space">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{$models->name}}" />
                </div>
            </div>


        </div>
        <button type="submit" class="btn-area">Update</button>
    </form>
</div>
@endsection