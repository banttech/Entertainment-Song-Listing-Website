@extends('layouts.frontend.app')
@section('content')
<style>
    
        .register_form{
            width:30%;
        }
  
        @media screen and (max-width: 900px) {
            .register_form{
                width:80%;
            }
           
        }
         
        
            
        
    </style>
<div class="latest-albums">
    <div class="container register_form">
        <h3 class="bars">Register</h3>
        <form method="POST" action="{{ route('user.signup') }}">
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
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
            <div class="input-group w3_w3layouts">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input name= "name" type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group w3_w3layouts">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input name= "email" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group w3_w3layouts">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group w3_w3layouts">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password" aria-describedby="basic-addon1" required>
            </div>

            <div class="input-group w3_w3layouts">
            <h3>
                <button type="submit" class="label label-primary">
                    Register
                </button>
                </h3>
            </div>
        </form>
    </div>
</div>

@endsection