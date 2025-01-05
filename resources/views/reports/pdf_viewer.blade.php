<!DOCTYPE html>
<html>
<head>
    <title>Invoice Viewer</title>
</head>
<body>
<div style="text-align: center; margin-bottom: 20px;">
    <a href="{{ $downloadUrl }}" target="_blank" class="btn btn-primary">Download PDF</a>
</div>
<iframe src="data:application/pdf;base64,{{ $pdfContent }}" width="100%" height="1000" style="border: none;"></iframe>
</body>
</html>
