<?php

return [
    /*
     * Mailer driver name.
     *
     * 'SendGrid'
     * Uses SendGrid service.
     */
    'driver' => 'phpmailer',

    /*
     * Errors-To header value.
     */
    'errors_go_to' => '',

    /*
     * Fake e-mail destination.
     *
     * Tells the application to send all messages to a certain e-mail
     * address instead of the actual recipient.
     */
    'fake_to' => env('FAKE_MAIL_TO', ''),

    /*
     * Settings for mailer driver.
     */
    'settings' => [
        /*
         * The mail transfer protocol.
         */
        'protocol' => 'smtp',

        /*
         * The SMTP host.
         */
        'host' => 'your.smtp.host.addr',

        /*
         * The SMTP port.
         */
        'port' => 587,

        /*
         * The SMTP cryptography protocol.
         */
        'cryptography' => 'tls',

        /*
         * SMTP authentication needed.
         */
        'authenticated' => true,

        /*
         * The SMTP user.
         */
        'username' => env('SMTP_USER', 'or-put-your-smtp-user-here'),

        /*
         * The SMTP password.
         */
        'password' => env('SMTP_PASS', 'or-put-your-smtp-password-here'),

        /*
         * Debug level.
         *
         * Values accepted: 0, 1 or 2
         */
        'debug' => 0,
    ],
];
