<?php
/**
 * Springy Framework main configuration file.
 *
 * ==========================================
 *
 * This configuration file will be read only once on
 * the application startup.
 *
 * If there is other files named main.php under subdirectories
 * it will be ignored.
 */

return [
    /*
     * The application configuration.
     *
     * @var array
     */
    'app' => [
        /*
         * The application name.
         *
         * @var string
         */
        'name' => 'Springy Framework - Demo Application',

        /*
         * The application version.
         *
         * An array with major, minor and revision integers
         * that forms the application version.
         *
         * @var array
         */
        'version' => [5, 0, 0],

        /*
         * The project code name.
         *
         * @var string
         */
        'code_name' => 'Alpha',
    ],

    /*
     * The application environment.
     *
     * Can be setted in system environment variable or local.
     *
     * @var string
     */
    'environment' => env('SPRINGY_ENVIRONMENT', 'development'),

    /*
     * Environments by host.
     *
     * You can set a specific environment configuration by host using
     * this array configuration where the key is a PCRE string with
     * the host and the value is the environment.
     *
     * @var array
     */
    'environments' => [],

    /*
     * The default application charset.
     *
     * Default: 'UTF-8'
     *
     * @var string
     */
    'charset' => 'UTF-8',

    /*
     * The system time zone.
     *
     * Default: 'UTC'
     *
     * @var string
     */
    'timezone' => 'UTC',

    /*
     * The errors log folder path.
     *
     * @var string
     */
    'errors_log' => __DIR__  . '/../var/log/errors',

    /*
     * The webmaster email to report about application errors.
     *
     * If the value is an array, will send the alert for all
     * of them, but the first will be used as sender of the message.
     *
     * @var string|array
     */
    // 'errors_reporting' => env('WEBMASTER_EMAIL', ''),
    'errors_reporting' => 'suporte@fval.com.br',

    /*
     * List of errors that should not be logged nor reported.
     *
     * @var array
     */
    'unreportable_errors' => [
        Springy\Exceptions\HttpErrorBadRequest::class,
        Springy\Exceptions\HttpErrorConflict::class,
        Springy\Exceptions\HttpErrorForbidden::class,
        Springy\Exceptions\HttpErrorGone::class,
        Springy\Exceptions\HttpErrorImaTeapot::class,
        Springy\Exceptions\HttpErrorLengthRequired::class,
        Springy\Exceptions\HttpErrorMethodNotAllowed::class,
        Springy\Exceptions\HttpErrorNotAcceptable::class,
        Springy\Exceptions\HttpErrorNotFound::class,
        Springy\Exceptions\HttpErrorPreconditionFailed::class,
        Springy\Exceptions\HttpErrorPreconditionRequired::class,
        Springy\Exceptions\HttpErrorServiceUnavailable::class,
        Springy\Exceptions\HttpErrorTooManyRequests::class,
        Springy\Exceptions\HttpErrorUnauthorized::class,
        Springy\Exceptions\HttpErrorUnsupportedMediaType::class,
    ],

    /*
     * The configuration folder path.
     *
     * Default: current folder
     *
     * @var string
     */
    'config_path' => __DIR__,
];
