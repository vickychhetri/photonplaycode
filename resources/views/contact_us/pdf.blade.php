<!DOCTYPE html>
<html>
<head>
    <title>Inquiry Details</title>
    <style>
        /* Add any custom styles for the PDF */
    </style>
</head>
<body>
<h1>Inquiry Details</h1>
<p><strong>Subject:</strong> {{$record->subject}}</p>
<p><strong>Country:</strong> {{$record->country}}</p>
<p><strong>First Name:</strong> {{$record->first_name}}</p>
<p><strong>Last Name:</strong> {{$record->last_name}}</p>
<p><strong>Email:</strong> {{$record->email}}</p>
<p><strong>Phone Number:</strong> {{$record->phone_number}}</p>
<p><strong>Inquiry Created:</strong> {{$record->created_at}}</p>
<p><strong>Last Updated:</strong> {{$record->updated_at}}</p>
<p><strong>Current Status:</strong> {{$record->status}}</p>
<p><strong>Inquiry Page:</strong> <a href="{{$record->url}}">{{$record->url}}</a></p>
<p><strong>Message:</strong> {{$record->message}}</p>

</body>
</html>
