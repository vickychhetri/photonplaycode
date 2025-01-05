<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password/Profile Changed</title>
</head>
<body>
<h1>Hello, {{ $customerName }}</h1>
<p>Your password/profile has been successfully changed.</p>
<p>If you did not request this change, please <a href="{{ $loginUrl }}">login</a> and secure your account immediately.</p>
<p>Thank you for using our service!</p>
</body>
</html>
