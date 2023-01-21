@extends('layouts.admin.app')

@section('content')
<style>
    button.update_btn{
        width: 170px !important;
        border-radius: 10px !important;
    }
</style>
<div class="white-bx">
    <h3 class="sub-heading">{{ $pageTitle }}</h3>

    <form action="{{ route('profile.update', ['id' => $user->id]) }}" method="POST">
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
                    <input type="text" name="name" value="{{$user->name}}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">Email</label>
                    <input type="text" name="email" value="{{$user->email}}" />
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="input-space">
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="{{$user->phone}}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">Address</label>
                    <input type="text" name="address" value="{{$user->address}}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">City</label>
                    <input type="text" name="city" value="{{$user->city}}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">State</label>
                    <input type="text" name="state" value="{{$user->state}}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">Zip</label>
                    <input type="text" name="zip" value="{{$user->zip}}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">Country</label>
                    <input type="text" name="country" value="{{$user->country}}" />
                </div>
            </div> -->
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">Password</label>
                    <input type="password" name="password" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-space">
                    <label for="">Confirm Password</label>
                    <input type="password" name="password_confirmation" />
                </div>
            </div>
        </div>
        <button type="submit" class="btn-area update_btn">Update</button>
    </form>
</div>
@endsection