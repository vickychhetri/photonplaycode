<!DOCTYPE html>
<html>
<head>
    <title>Photonplay </title>
</head>
<body style="margin: 0; padding: 0; background-color: #f9f9f9; font-family: Arial, sans-serif; color: #333; line-height: 1.6;">

<!-- Email Container -->
<table width="100%" cellspacing="0" cellpadding="0" style="background-color: #f9f9f9; padding: 20px;">
    <tr>
        <td align="center">
            <!-- Email Content Wrapper -->
            <table width="600px" cellspacing="0" cellpadding="0" style="background-color: #ffffff; border: 1px solid #dddddd; border-radius: 5px; overflow: hidden;">

                <!-- Header -->
                <tr>
                    <td style="background-color: #4CAF50; color: #ffffff; padding: 15px; text-align: center; font-size: 20px; font-weight: bold;">
                        Photonplay
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding: 20px; font-size: 16px; color: #333333;">
                        <p>Dear User,</p>
                        <p style="margin: 0 0 10px;">
                            {!! $message->body !!}
                        </p>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background-color: #f2f2f2; text-align: center; padding: 15px; font-size: 14px; color: #555555;">
                        <p style="margin: 0;">Thanks,</p>
                        <p style="margin: 0; font-weight: bold;">{{ config('app.name') }}</p>
                    </td>
                </tr>

            </table>
            <!-- End Email Content Wrapper -->
        </td>
    </tr>
</table>
<!-- End Email Container -->

</body>
</html>
