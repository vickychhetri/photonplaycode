<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry - PhotonPlay</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        p {
            color: #555;
            font-size: 14px;
        }
        .highlight {
            font-weight: bold;
            color: #333;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 20px;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Inquiry - PhotonPlay</h2>

    <p><span class="highlight">Subject:</span> {{$body['subject'] ?? 'N/A'}}</p>

    @if($body['first_name'] || $body['last_name'])
        <p><span class="highlight">Name:</span> {{$body['first_name'] ?? ''}} {{$body['last_name'] ?? ''}}</p>
    @endif

    @if($body['email'])
        <p><span class="highlight">Email:</span> {{$body['email']}}</p>
    @endif

    @if($body['company_name'])
        <p><span class="highlight">Company:</span> {{$body['company_name']}}</p>
    @endif

    @if($body['phone_number'])
        <p><span class="highlight">Mobile:</span> {{$body['phone_number']}}</p>
    @endif

    @if($body['message'])
        <p><span class="highlight">Message:</span> {{$body['message']}}</p>
    @endif

    @if($body['url'])
        <p><span class="highlight">Page URL:</span> {{$body['url']}}</p>
    @endif

    <div class="footer">
        <p>Thanks,<br>{{ config('app.name') }}</p>
        <p>For any inquiries or support, please reach out to us at <a href="mailto:support@photonplay.com">support@photonplay.com</a>.</p>
    </div>
</div>
</body>
</html>
