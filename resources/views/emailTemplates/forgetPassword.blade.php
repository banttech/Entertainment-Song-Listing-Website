<!DOCTYPE html>

<html>

<head>
    <title>Password Reset</title>
</head>

<body style="margin: 0 auto; font-family: arial">
    <div style="width: 50%; margin: 0 auto">
        <div style="width: 100%; padding: 20px 0px; float: left">
            <div
                style="
            width: 100%;
            float: left;
            text-align: center;
            padding: 0px 10px;
          ">
                <img src="{{ asset('images/1.png') }}" />
            </div>
        </div>

        <div
            style="
          width: 100%;
          float: left;
          background: #f4f4f4;
          padding: 20px 10px;
          margin-bottom: 0px;
          border: 1px solid #ccc;
          border-bottom: none;
        ">
            <p
                style="
            font-size: 24px;
            font-weight: 600;
            color: #000000ba;
            margin: 0px;
            text-align: center;
          ">
                You have requested a password reset, please use the below password to login.
            </p>

            <p
                style="
            font-size: 20px;
            font-family: arial;
            font-weight: 600;
            color: #000000ba;
            text-align: center;
            margin-top: 50px;
          ">
                Your new Password is <a href="#" style="color: #f95a68">{{ $body['newPass'] }}</a>
            </p>

            <p
                style="
            font-size: 20px;
            font-family: arial;
            font-weight: 600;
            color: #000000ba;
            text-align: center;
            margin-top: 20px;
          ">
                Click <a href="{{ url('/login') }}" style="color: #f95a68">here </a> to go to login page
            </p>

            <p
                style="
            font-size: 13px;
            font-weight: 600;
            color: #000000ba;
            text-align: center;
            margin: 0px 0px 50px 0px;
          ">
                Please ignore this email if you did not request a password change.
            </p>
        </div>

        <div
            style="
          width: 100%;
          float: left;
          border: 1px solid #ccc;
          padding: 15px 10px 10px 10px;
          text-align: center;
          background: #f4f4f4;
          margin-bottom: 10px;
        ">
            <h3
                style="
            font-weight: 600;
            font-family: arial;
            margin-bottom: 5px;
            font-size: 16px;
            color: #2f2fffe0;
          ">
                Have a Good Day
            </h3>

            <p
                style="
            font-weight: 600;
            font-family: arial;
            margin-bottom: 5px;
            font-size: 13px;
            color: #2f2fffe0;
            margin-top: 0px;
          ">
                © 2022 Symphony. All Rights Reserved | Developed and Maintained by Banttech
            </p>
        </div>
    </div>
</body>

</html>
