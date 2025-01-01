<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 2px solid #4caf50;
        }
        .header h1 {
            margin: 0;
            color: #4caf50;
        }
        .content {
            margin: 20px 0;
        }
        .content p {
            margin: 10px 0;
        }
        .content a {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 15px;
            background-color: #4caf50;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Photonplay</h1>
    </div>
    <div class="content">
        <p>Dear {{$body['name']}},</p>
        <p>We received a request to reset the password for your account on Photonplay. If you did not request this, please ignore this email.</p>
        <p>To reset your password, please click the link below:</p>
        <a href="{{ route('customer.reset_password', $body['token']) }}" target="_blank">Reset Password</a>
        <p>This link is valid for the next 15 minutes.</p>
        <p>If you encounter any issues or need assistance, feel free to contact our support team at <a href="mailto:support@photonplay.com">support@photonplay.com</a> or call us at (800) 966-9329.</p>
        <p>For your security, never share your password reset link with anyone.</p>
    </div>
    <div class="footer">
        <p>Thank you,<br>
            E-Portal Administration<br>
            Photonplay Systems Ltd.<br>
            6733 Mississauga Road, Mississauga, ON, L5N 6J5, Canada.<br>
            <a href="https://www.photonplay.com" target="_blank">www.photonplay.com</a></p>
        <p>DISCLAIMER:<br>
            The contents of this e-mail and any attachment(s) are confidential and intended for the named recipient(s) only. It shall not attach any liability on the originator or Photonplay Systems Inc or its affiliates. Any views or opinions presented in this email are solely those of the author and may not necessarily reflect the opinions of Photonplay Systems Inc or its affiliates.</p>
    </div>
</div>
</body>
</html>


