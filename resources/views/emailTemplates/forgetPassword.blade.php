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
          background: #f4f4f4;
          padding: 0px 10px 20px;
          margin-bottom: 30px;
          border: 1px solid #ccc;
          border-top: none;
        ">
            <div style="margin-top: 0px; float: left">
                <p
                    style="
              width: 100%;
              float: left;
              margin-top: 0px;
              font-size: 14px;
              font-family: arial;
              margin-bottom: 5px;
              color: #000000ba;
              font-weight: 600;
            ">
                    For any query or assistance, feel free to call on following numbers
                </p>

                <p
                    style="
              width: 100%;
              float: left;
              margin-top: 0px;
              font-size: 14px;
              font-family: arial;
              margin-bottom: 5px;
              color: #000000ba;
              font-weight: 600;
            ">
                    For UK Customers:
                    <span style="color: #848484; font-weight: 900">02072052477</span> |
                    <span style="color: #848484; font-weight: 900">02072052315</span>
                </p>

                <p
                    style="
              width: 100%;
              float: left;
              margin-top: 0px;
              font-size: 14px;
              font-family: arial;
              margin-bottom: 5px;
              color: #000000ba;
              font-weight: 600;
            ">
                    Outside UK:
                    <span style="color: #848484; font-weight: 900">02072052477</span>
                </p>
            </div>
        </div>

        <div
            style="
          width: 100%;
          float: left;
          padding: 0px 10px;
          border: 1px solid #ccc;
          margin-bottom: 30px;
          border-right: none;
          border-left: none;
        ">
            <p
                style="
            color: #000000ba;
            font-weight: 600;
            font-family: arial;
            margin-bottom: 5px;
          ">
                Follow us on
            </p>

            <ul style="padding: 0px; margin: 0px">
                <li style="list-style: none; display: inline-block">
                    <a href="#"><img
                            src="https://www.naturaljuices.co.uk/newemailtemplate/template_img/icon_t.png" /></a>
                </li>

                <li style="list-style: none; display: inline-block; margin-left: 10px">
                    <a href="#"><img
                            src="https://www.naturaljuices.co.uk/newemailtemplate/template_img/icon_f.png" /></a>
                </li>

                <li style="list-style: none; display: inline-block; margin-left: 10px">
                    <a href="#"><img
                            src="https://www.naturaljuices.co.uk/newemailtemplate/template_img/icon_g.png" /></a>
                </li>

                <li style="list-style: none; display: inline-block; margin-left: 10px">
                    <a href="#"><img
                            src="https://www.naturaljuices.co.uk/newemailtemplate/template_img/icon_p.png" /></a>
                </li>
            </ul>

            <p
                style="
            color: #000000ba;
            font-weight: 600;
            font-family: arial;
            font-size: 15px;
            margin-top: 7px;
          ">
                We are constantly striving to improve our service and
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
