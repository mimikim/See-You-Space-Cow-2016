<?php /* Template Name: Blog Page */ ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style type="text/css">

        td {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #222222;
        }

        @media only screen and ( max-width: 480px ) {

            body[yahoo] td.content {
                display: block !important;
                padding: 0 !important;
            }

            body[yahoo] .wrapper {
                width: 300px !important;
                padding: 0 10px !important;
                margin: auto !important;;
            }
        }
    </style>
</head>
<body yahoo="fix" style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 1.5; background: #ffffff; color: #222222; -webkit-text-size-adjust: none;">

<table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#ffffff">
    <tr>
        <td valign="top" align="center">
            <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="wrapper">
                <tr>
                    <td height="10"></td>
                </tr>
                <tr>
                    <td align="center" style="font-size:10px;">
                        New Form Submission from MKWD
                    </td>
                </tr>
                <tr>
                    <td height="40"></td>
                </tr>
                <tr>
                    <td align="left" style="font-size: 25px; font-weight:bold; line-height: normal;" class="content">
                        New Form Submission from [name]
                    </td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td align="left">
                        New Contact Form Submission has been sent.
                        <br><br>
                        <strong>Name:</strong> [name]
                        <br>
                        <strong>Email: </strong> [email]
                        <br>
                        <strong>Date:</strong> [date]
                        <br>
                        <strong>Time:</strong> [time]
                        <br>
                        <strong>IP Address:</strong> [ip address]
                        <br>
                        <strong>Country:</strong> [country]
                        <br><br>
                        <strong>Message Contents:</strong>
                        <br>
                        [message]
                    </td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
