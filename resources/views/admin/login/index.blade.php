<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('admin_assets//css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,600;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('admin_assets//js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" defer></script>

    <script src="{{ asset('admin_assets//js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin_assets//js/main.js') }}" defer></script>
    <script>
        $('#chooseFile').bind('change', function() {
            var filename = $("#chooseFile").val();
            if (/^\s*$/.test(filename)) {
                $(".file-upload").removeClass('active');
                $("#noFile").text("No file chosen...");
            } else {
                $(".file-upload").addClass('active');
                $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
            }
        });
    </script>

    
    <style>
        button.login_btn{
            width: 170px !important;
            border-radius: 10px !important;
        }
        .input-style{
            border-radius:5px !important;
        }
        .login-btn{
            width: 100%;
            text-align: center;
        }
    </style>

</head>

<body class="pink-bg">
    <div class="form-bg small-wdd">
        <div class="logo-center text-center">
            <!-- <img src="images/logo.png" alt="" /> -->
        </div>
        <h2>Admin Login</h2>

        <form method="POST" action="{{ route('admin.login') }}">
     
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
            <div class="input-space">
                <input type="email" name="email" :value="old('email')" required autofocus placeholder="Email Address" class="input-style" />
            </div>


            <div class="input-space">
                <input type="password" name="password" required autocomplete="current-password" placeholder="Password" class="input-style"/>
            </div>

            <div class="input-space mb-0 login-btn">
                <button class="login_btn">Login</button>
            </div>
        </form>
    </div>

</body>

</html>