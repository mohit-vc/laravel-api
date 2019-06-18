@extends('mails.layouts.main')

@section('content')
    <!-- WRAPPER / CONTEINER -->
    <table border="0" cellpadding="0" cellspacing="0" align="center"
           bgcolor="#FFFFFF"
           width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="container">
        <tr>
            <td class="content-cell">
                <h1>Hi {{$user->name}},</h1>
            </td>
        </tr>
        <tr>
            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 24px; font-weight: bold; line-height: 130%;
			padding-top: 25px;
			color: #000000;
			font-family: sans-serif;" class="header">
                Welcome to {{env('APP_NAME')}}!
                <p>You recently invited into {{env('APP_NAME')}} application,
                    please login to your account and
                    reset your password.
                </p>
            </td>
        </tr>

        <tr>
            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
			padding-top: 25px;
			color: #000000;
			font-family: sans-serif;" class="paragraph">
                Your Email : {{$user->email}}</td>
        </tr>
        <tr>
            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
			padding-top: 25px;
			color: #000000;
			font-family: sans-serif;" class="paragraph">
                Your Password : {{$password}}</td>
        </tr>

        <tr>
            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px; color: #FFFFFF;
			padding-bottom: 5px;" class="button">
                    <table border="0" cellpadding="0" cellspacing="0" align="center" style="max-width: 240px; min-width: 120px; border-collapse: collapse; border-spacing: 0; padding: 0;">
                        <tr>
                            <td align="center" valign="middle" style="padding: 12px 24px; margin: 0; text-decoration: underline; border-collapse: collapse; border-spacing: 0; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px;"
                                bgcolor="#2F5BE7">
                                <a style="color: #FFFFFF" href="{{ env('FRONTEND_APP_URL').'#/auth/login'}}">Login in your account.</a>

                            </td>
                        </tr>
                    </table>
            </td>
        </tr>
        <!-- Set line color -->
        <tr>
            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px;" class="line"><hr
                    color="#E0E0E0" align="center" width="100%" size="1" noshade style="margin: 0; padding: 0;" />
            </td>
        </tr>

        <!-- LINE -->
        <!-- Set line color -->
        <tr>
            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px;" class="line"><hr
                    color="#E0E0E0" align="center" width="100%" size="1" noshade style="margin: 0; padding: 0;" />
            </td>
        </tr>
    <tr>
            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
			padding-top: 20px;
			padding-bottom: 25px;
			color: #000000;
			font-family: sans-serif;" class="paragraph">
                Have a&nbsp;question? <a href="mailto:{{env('ADMIN_EMAIL')}}" target="_blank" style="color: #127DB3; font-family: sans-serif; font-size: 17px; font-weight: 400; line-height: 160%;">{{env('ADMIN_EMAIL')}}</a>
            </td>
        </tr>

        <!-- End of WRAPPER -->
    </table>

    <!-- WRAPPER -->
@endsection


