@extends('layouts.frontend.app')
@section('content')
    <style>
        button.close {
            font-size: 1.5rem;
        }
        .Login-form{
            width:30%;
        }
  
        @media screen and (max-width: 900px) {
            .Login-form{
                width:80%;
            }
           
        }
         
        
            
        
    </style>
    <div class="latest-albums">
        <div class="container Login-form" >
            <h3 class="bars">Login</h3>
            <form method="POST" action="{{ route('user.signin') }}">
                @if (session('error'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session('success') }}
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
                    <input name="email" type="email" class="form-control" placeholder="Email"
                        aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1">@</span>
                    <input type="password" name="password" class="form-control" placeholder="****"
                        aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group w3_w3layouts">
                    <a href="{{ route('forgetPassword') }}">Forget Password</a>
                </div>
                <div class="input-group w3_w3layouts">
                    <h3>
                        <button type="submit" class="label label-primary">
                            Login
                        </button>
                    </h3>
                </div>
            </form>
        </div>
    </div>

@endsection
