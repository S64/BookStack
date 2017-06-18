<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'failed' => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    /**
     * Login & Register
     */
    'sign_up' => '新規登録',
    'log_in' => 'ログイン',
    'log_in_with' => ':socialDriverでログイン',
    'sign_up_with' => ':socialDriverで登録',
    'logout' => 'ログアウト',

    'name' => '名前',
    'username' => 'ユーザ名',
    'email' => 'メールアドレス',
    'password' => 'パスワード',
    'password_confirm' => 'パスワード (確認)',
    'password_hint' => '5文字以上である必要があります',
    'forgot_password' => 'パスワードをお忘れですか？',
    'remember_me' => 'ログイン情報を保存する',
    'ldap_email_hint' => 'Please enter an email to use for this account.',
    'create_account' => 'アカウント作成',
    'social_login' => 'SNSログイン',
    'social_registration' => 'SNS登録',
    'social_registration_text' => '他のサービスで登録 / ログインする',

    'register_thanks' => '登録が完了しました！',
    'register_confirm' => 'メール内の確認ボタンを押して、:appNameへアクセスしてください。',
    'registrations_disabled' => '登録は現在停止中です。',
    'registration_email_domain_invalid' => 'このEmailドメインでの登録は許可されていません。',
    'register_success' => '登録が完了し、ログインできるようになりました！',


    /**
     * Password Reset
     */
    'reset_password' => 'パスワードリセット',
    'reset_password_send_instructions' => 'Enter your email below and you will be sent an email with a password reset link.',
    'reset_password_send_button' => 'Send Reset Link',
    'reset_password_sent_success' => 'A password reset link has been sent to :email.',
    'reset_password_success' => 'Your password has been successfully reset.',

    'email_reset_subject' => 'Reset your :appName password',
    'email_reset_text' => 'You are receiving this email because we received a password reset request for your account.',
    'email_reset_not_requested' => 'If you did not request a password reset, no further action is required.',


    /**
     * Email Confirmation
     */
    'email_confirm_subject' => 'Confirm your email on :appName',
    'email_confirm_greeting' => 'Thanks for joining :appName!',
    'email_confirm_text' => 'Please confirm your email address by clicking the button below:',
    'email_confirm_action' => 'Confirm Email',
    'email_confirm_send_error' => 'Email confirmation required but the system could not send the email. Contact the admin to ensure email is set up correctly.',
    'email_confirm_success' => 'Your email has been confirmed!',
    'email_confirm_resent' => 'Confirmation email resent, Please check your inbox.',

    'email_not_confirmed' => 'Email Address Not Confirmed',
    'email_not_confirmed_text' => 'Your email address has not yet been confirmed.',
    'email_not_confirmed_click_link' => 'Please click the link in the email that was sent shortly after you registered.',
    'email_not_confirmed_resend' => 'If you cannot find the email you can re-send the confirmation email by submitting the form below.',
    'email_not_confirmed_resend_button' => 'Resend Confirmation Email',
];
