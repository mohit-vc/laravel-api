@extends('mails.layouts.main')

@section('content')

    <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0">
        <!-- Body content -->
        <tr>
            <td class="content-cell">
                <h1>Hi {{$user->name}},</h1>
                <p>You recently requested to reset your password for your {{env('APP_NAME')}} account. Please logout first then
                    use the button below to reset it.
                </p>
                <!-- Action -->
                <table class="body-action" align="center" width="100%" cellpadding="0"
                       cellspacing="0">
                    <tr>
                        <td align="center">
                            <!-- Border based button -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <a href="{{ env('FRONTEND_APP_URL').'#/auth/reset-password/'.$user->token}}"
                                                       class="button button--green" target="_blank">Reset
                                                        your password</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!-- Sub copy -->
                <table class="body-sub">
                    <tr>
                        <td>
                            <p class="sub">If you’re having trouble with the button above, copy and
                                paste the URL below into your web browser.</p>
                            <p class="sub">{{ env('FRONTEND_APP_URL').'#/auth/reset-password/'.$user->token}}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
@endsection
