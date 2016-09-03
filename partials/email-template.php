<?php

$user_ID = get_current_user_id();

$ip = get_ip_address();

$date = date('F j, Y H:i:s');

$admin_email = get_option('admin_email');

$headers = array(
    'Content-Type: text/html; charset=UTF-8',
    'From: Mimi Kim <donotreply@mimikimwebdeveloper.com>'
);

$subject = 'Thanks for your form submission!';
$admin_subject = 'New Form Submission from ' . $email_message['name'] . ', ' . $email_message['email'];

ob_start(); ?>

    <!DOCTYPE HTML>
    <html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <style type="text/css">

            td {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 18px;
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

                body[yahoo] .title {
                    font-size: 40px !important;
                }

                body[yahoo] .cow-logo {
                    width: 80px !important;
                }

                body[yahoo] .mobile-image {
                    width: 300px !important;
                    height: 2px !important;
                }

            }
        </style>
    </head>
    <body yahoo="fix" style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.5; background: #d3d3d3; color: #222222; -webkit-text-size-adjust: none;">

    <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#d3d3d3">
        <tr>
            <td valign="top" align="center">
                <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="wrapper">
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <tr>
                        <td align="center" style="font-size:10px;">
                            Your broadcast is being received!
                        </td>
                    </tr>
                    <tr>
                        <td height="40"></td>
                    </tr>
                    <tr>
                        <td>
                            <table cellpadding="0" cellspacing="0" width="100%" border="0">
                                <tr>
                                    <td align="center" valign="center" class="content">
                                        <a href="<?php echo site_url(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/cow-head.png" width="100" border="0" class="cow-logo" alt="Link to Mimi Kim Web Developer"></a>
                                    </td>
                                    <td align="center" valign="center" style="padding-left: 20px; font-size: 50px; font-weight:bold; line-height: normal;" class="content title">
                                        Thanks for your submission!
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                    </tr>
                    <tr>
                        <td bgcolor="#222222" height="10"></td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#ffffff">
                                <tr>
                                    <td align="left" style="padding:40px 30px 40px; font-size:20px;">
                                        <div style="font-size:30px; font-weight:bold;">Thanks <?php echo $email_message['name']; ?>,</div>
                                        <br>
                                        Our bovine astronauts are receiving your transmission. Should there be a need, we will reply promptly.
                                        <br><br>
                                        Sincerely,
                                        <br>
                                        Mimi
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top" style="padding: 0 30px 30px; color: #444444; font-size:12px;">
                                        <strong>Your Message Contents:</strong>
                                        <br>
                                        <?php echo $email_message['message']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="center" style="padding: 0 30px;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/email_line.jpg" width="100%" height="2" class="mobile-image">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding: 15px 30px 30px;">
                                        <div style="font-size: 25px; font-weight:bold;">
                                            There's plenty more!
                                        </div>
                                        <br>
                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tr>
                                                <td valign="top" align="left" bgcolor="#fdeef1" style="padding: 20px;">
                                                    <strong>Looking for web development help?</strong>
                                                    <br>
                                                    Easy tutorials are right at your fingertips!
                                                    <br><br>
                                                    <a href="<?php echo get_permalink(21); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/email_button.png" width="180" alt="Link to Tutorials"></a>
                                                </td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#222222" height="5"></td>
                    </tr>
                    <tr>
                        <td style="padding: 30px 15px 30px;">
                            <table cellpadding="0" cellspacing="0" border="0" align="center">
                                <tr>
                                    <td valign="center" align="center" style="padding-right: 50px; font-size: 10px;">
                                        <a href="https://github.com/mimikim/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/github.png" border="0" alt="Link to my Github" height="40" width="47"></a>
                                        <br>github
                                    </td>
                                    <td valign="center" align="center" style="padding-right: 50px; font-size: 10px;">
                                        <a href="http://codepen.io/mimikim/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/codepen.png" border="0" alt="Link to my Codepen" height="40" width="40"></a>
                                        <br>codepen
                                    </td>
                                    <td valign="center" align="center" style="font-size: 10px;">
                                        <a href="http://www.linkedin.com/in/mimikimwebdeveloper/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/linkedin.png" border="0" alt="Link to my Linkedin" height="40" width="40"></a>
                                        <br>linkedin
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td valign="center" align="center" height="2">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/email_line.jpg" width="100%" height="2" class="mobile-image">
                        </td>
                    </tr>
                    <tr>
                        <td align="left" valign="top" style="padding: 20px 0; font-size: 10px;">
                            This email was sent to you because your email <?php echo $email_message['email']; ?> was entered in the contact form located <a href="<?php echo get_permalink(11); ?>">here</a>.
                            <br><br>
                            You have not been subscribed to any newsletter list!
                            <br><br>
                            This is an automated message. Please do not reply to this email, I won't get it!
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

<?php $content = ob_get_contents(); ob_end_clean();
echo wp_mail($email_message['email'], $subject, $content, $headers);

ob_start(); ?>

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
                            New Form Submission from <?php echo $email_message['name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                    </tr>
                    <tr>
                        <td align="left">
                            New Contact Form Submission has been sent.
                            <br><br>
                            <strong>Name:</strong> <?php echo $email_message['name']; ?>
                            <br>
                            <strong>Email: </strong> <?php echo $email_message['email']; ?>
                            <br>
                            <strong>Date:</strong> <?php echo $date; ?>
                            <br>
                            <strong>IP Address:</strong> <?php echo $ip; ?>
                            <br><br>
                            <strong>Message Contents:</strong>
                            <br>
                            <?php echo $email_message['message']; ?>
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

<?php $admin_content = ob_get_contents(); ob_end_clean();

echo wp_mail($admin_email, $admin_subject, $admin_content, $headers);
?>