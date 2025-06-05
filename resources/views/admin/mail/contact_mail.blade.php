<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{business_setting('site_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Helvetica:700,400');
        body{font-family:Helvetica,sans-serif;font-style:normal}a,body,table,td{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}table,td{mso-table-rspace:0pt;mso-table-lspace:0pt}img{-ms-interpolation-mode:bicubic}a[x-apple-data-detectors]{font-family:inherit!important;font-size:inherit!important;font-weight:inherit!important;line-height:inherit!important;color:inherit!important;text-decoration:none!important}table{border-collapse:collapse!important}.congrats-box{margin-top:47px;margin-bottom:38px}
    </style>
</head>
<body style="background-color: #ececec;margin:0;padding:0;text-align:center;">
    <div style="width:595px;margin:auto; background-color:white;margin-top:100px;
            padding-top:40px;padding-bottom:40px;border-radius: 3px; text-align:center; ">

        <img loading="lazy" src="{{ url('storage/app/' . business_setting('header_logo')) }}" alt="{{business_setting('site_name') }}"
            style="height: 80px; width:auto;">

        <div class="congrats-box">
            <span
                style="font-weight: 700;font-size: 26px;color: #000000;text-transform: uppercase; line-height: 135.5%; display:block; margin-bottom:5px;">Thank you</span>
            <span
                style="font-weight: 700;font-size: 14px;line-height: 135.5%;text-align: center;color: #727272; display:block;">for filling out the form</span>
        </div>
        <span
            style="font-weight: bold;font-size: 16px;line-height: 135.5%;text-align: center;color: #182E4B; display:block; margin-bottom: 5px;">Name:
            {{ $mailData['data']['name'] }}</span>
        <span
            style="font-weight: bold;font-size: 16px;line-height: 135.5%;text-align: center;color: #182E4B; display:block; margin-bottom: 5px;">Email:
            {{ $mailData['data']['email'] }}</span>
        <span
            style="font-weight: bold;font-size: 16px;line-height: 135.5%;text-align: center;color: #182E4B; display:block; margin-bottom: 5px;">Phone:
            {{ $mailData['data']['phone'] }}</span>
        <span
            style="font-weight: bold;font-size: 16px;line-height: 135.5%;text-align: center;color: #182E4B; display:block; margin-bottom: 5px;">Message:
            {{ $mailData['data']['message'] }}</span>
        <span
            style="font-weight: 400;font-size: 14px;line-height: 135.5%;color: #182E4B;display:block; margin-bottom:34px;">Thanks
            <span style="color: #EF7822;">{{business_setting('site_name')}}!</span></span>
        <span
            style="font-weight: 400;font-size: 12px;line-height: 135.5%;color: #5D6774; display:block; margin-bottom:20px;">Welcome Text
        </span>
        <a href="{{url('/')}}" target="_blank"
            style="width: 100px;height: 40px;left: 247px;top: 321px;background: #EF7822;border-radius: 5px; padding: 10px;text-decoration: none;color: white;">Visit Now</a>
        <span
            style="font-weight: 400;font-size: 12px;line-height: 135.5%;color: #5D6774;display:block;margin-top:43px;">Feedback
            <a href="mailto:{{business_setting('email_id') }}" class="email">{{business_setting('email_id') }}</a>
        </span>
    </div>

    <div style="padding:5px;width:650px;margin:auto;margin-top:5px; margin-bottom:50px;">
        <table style="margin:auto;width:90%; color:#777777;">
            <tbody style="text-align: center;">
                <tr>
                    <th style="width: 100%;">
                        <div style="display:inline-block;">
                            <a href="{{url('/')}}" target=”_blank”>
                                <img loading="lazy" src="{{ url('storage/app/' . business_setting('header_logo')) }}" alt="{{business_setting('site_name') }}"
                                    style="height: 14px; width:14px; padding: 0px 3px 0px 5px;">
                            </a>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>
                        <div style="font-weight: 400;font-size: 11px;line-height: 22px;color: #242A30;">
                            <span style="margin-inline-end:5px;"><a href="tel:{{business_setting('phone_no2')}}" 
                                style="text-decoration: none; color: inherit;">Phone:{{business_setting('phone_no2')}}</a></span> 
                            <span><a href="mailto:{{business_setting('email_id2')}}" style="text-decoration: none; color: inherit;">
                                Email:{{business_setting('email_id2')}}</a></span>
                        </div>
                        <div style="font-weight: 400;font-size: 11px;line-height: 22px;color: #242A30;">
                            <a href="{{url('/')}}" style="text-decoration: none; color: inherit;">{{business_setting('site_name')}}</a>
                        </div>
                        <div style="font-weight: 400;font-size: 11px;line-height: 22px;color: #242A30;">{!!business_setting('address')!!}</div>
                        <span style="font-weight: 400;font-size: 10px;line-height: 22px;color: #242A30;">{{business_setting('copyright')}}</span>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>




