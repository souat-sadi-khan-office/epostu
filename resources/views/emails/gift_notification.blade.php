<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>{{ $subject }}</title>
        
    </head>
    <body class="" style="background-color: #eaebed;font-family: sans-serif;-webkit-font-smoothing: antialiased;font-size: 14px;line-height: 1.4;margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;background-color: #eaebed;">
        <tr>
            <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;">&nbsp;</td>
            <td class="container" style="font-family: sans-serif;font-size: 14px;vertical-align: top;display: block;max-width: 580px;padding: 10px;width: 580px;margin: 0 auto !important;">
            <div class="header" style="padding: 20px 0;">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;">
                <tr>
                    <td class="align-center" width="100%" style="font-family: sans-serif;font-size: 14px;vertical-align: top;text-align: center;">
                    <a href="{{ route('home') }} style="color: #ec0867;text-decoration: underline;"><img src="{{ asset('assets/images/logo.png')}}" height="40" alt="ePostU" style="border: none;-ms-interpolation-mode: bicubic;max-width: 100%;"></a>
                    </td>
                </tr>
                </table>
            </div>
            <div class="content" style="box-sizing: border-box;display: block;margin: 0 auto;max-width: 580px;padding: 10px;">

            <!-- START CENTERED WHITE CONTAINER -->
            <table role="presentation" class="main" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;background: #ffffff;border-radius: 3px;">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper" style="font-family: sans-serif;font-size: 14px;vertical-align: top;box-sizing: border-box;padding: 20px;">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;">
                    <tr>
                      <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;">
                        <p style="font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;">Dear {{ $name }}.</p>
                        <p style="font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;">Thank you for registering for our event! Here are your details:</p>
                        <p style="font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;">
                            <ul>
                                <li><strong>Email:</strong> {{ $email }}</li>
                                <li><strong>Phone:</strong> {{ $phone }}</li>
                            </ul>
                        </p>
                        <p style="font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;">📬&nbsp; Postdrop also lets you send test emails to yourself. You just need to sign up first so we know you're not a spammer.</p>
                        
                        <p style="font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;">Your gift:</p>
                        <p style="font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;"><strong>Gift Name:</strong> {{ $gift_name }}</p>
                        <p style="font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;"><img src="{{ $gift_picture }}" alt="{{ $gift_name }}" width="200px"></p>
                        <p style="font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;">We hope you enjoy your gift!</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class="footer" style="clear: both;margin-top: 10px;text-align: center;width: 100%;">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;">
                <tr>
                  <td class="content-block" style="font-family: sans-serif;font-size: 12px;vertical-align: top;padding-bottom: 10px;padding-top: 10px;color: #9a9ea6;text-align: center;">
                    <span class="apple-link" style="color: #9a9ea6;font-size: 12px;text-align: center;">Don't forget to add your address here</span>
                    <br> And <a href="{{ route('home') }} style="color: #9a9ea6;text-decoration: underline;font-size: 12px;text-align: center;">unsubscribe link</a> here.
                  </td>
                </tr>
                <tr>
                  <td class="content-block powered-by" style="font-family: sans-serif;font-size: 12px;vertical-align: top;padding-bottom: 10px;padding-top: 10px;color: #9a9ea6;text-align: center;">
                    Powered by <a href="{{ route('home') }}" style="color: #9a9ea6;text-decoration: none;font-size: 12px;text-align: center;">ePostU</a>.
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
        <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>