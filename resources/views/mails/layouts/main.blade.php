<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <meta name="format-detection" content="telephone=no"/>

    <style>
        /* Reset styles */
        body {
            margin: 0;
            padding: 0;
            min-width: 100%;
            width: 100% !important;
            height: 100% !important;
        }

        body, table, td, div, p, a {
            -webkit-font-smoothing: antialiased;
            text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            line-height: 100%;
        }

        table, td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            border-collapse: collapse !important;
            border-spacing: 0;
        }

        img {
            border: 0;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        #outlook a {
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
            line-height: 100%;
        }

        /* Rounded corners for advanced mail clients only */
        @media all and (min-width: 560px) {
            .container {
                border-radius: 8px;
                -webkit-border-radius: 8px;
                -moz-border-radius: 8px;
                -khtml-border-radius: 8px;
            }
        }

        /* Set color for auto links (addresses, dates, etc.) */
        a, a:hover {
            color: #127DB3;
        }

        .footer a, .footer a:hover {
            color: #999999;
        }

    </style>

    <!-- MESSAGE SUBJECT -->
    <title>Zira</title>

</head>

<body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%"
      style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%; height: 100%; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%;
	background-color: #F0F0F0;
	color: #000000;"
      bgcolor="#F0F0F0"
      text="#000000">

<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"
       style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;" class="background">
    <tr>
        <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;"
            bgcolor="#F0F0F0">

            <!-- WRAPPER -->
            <table border="0" cellpadding="0" cellspacing="0" align="center"
                   width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="wrapper">

                <tr>
                    <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 20px;
			padding-bottom: 20px;">

                        <div style="display: none; visibility: hidden; overflow: hidden; opacity: 0; font-size: 1px; line-height: 1px; height: 0; max-height: 0; max-width: 0;
			color: #F0F0F0;" class="preheader">
                            Available on&nbsp;GitHub and&nbsp;CodePen. Highly compatible. Designer friendly. More than
                            50%&nbsp;of&nbsp;total email opens occurred on&nbsp;a&nbsp;mobile device&nbsp;— a&nbsp;mobile-friendly
                            design is&nbsp;a&nbsp;must for&nbsp;email campaigns.
                        </div>
                        <a target="_blank" style="text-decoration: none;"
                           href={{env('FRONTEND_APP_URL')}}>
                            <img border="0" vspace="0" hspace="0" src="{{url('/images/logo.png')}}"
                                                                                  width="100" height="30"
                                                                                  alt="Logo" title="Logo" style="
				color: #000000;
				font-size: 10px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;"/></a>

                    </td>
                </tr>

                <!-- End of WRAPPER -->
            </table>

            <!-- WRAPPER / CONTEINER -->
        @yield('content')

        <!-- WRAPPER -->
            <table border="0" cellpadding="0" cellspacing="0" align="center"
                   width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="wrapper">

                <tr>
                    <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 13px; font-weight: 400; line-height: 150%;
			padding-top: 20px;
			padding-bottom: 20px;
			color: #999999;
			font-family: sans-serif;" class="footer">
                        This email template was sent to&nbsp;you becouse we&nbsp;want to&nbsp;make the&nbsp;world a&nbsp;better
                        place.

                    </td>
                </tr>

                <!-- End of WRAPPER -->
            </table>

            <!-- End of SECTION / BACKGROUND -->
        </td>
    </tr>
</table>

</body>
</html>
