<?php

return [
    /*
     * The template driver name.
     *
     * There are drivers for two template engines:
     *
     * 'smarty' : Smarty
     * 'twig'   : Twig
     */
    'driver' => 'smarty',

    /*
     * Sufix extension of the template files.
     */
    'file_sufix' => '.tpl',

    /*
     * Turns on/off the auto escape variable contents.
     */
    'auto_escape' => true,

    /*
     * Turns on/off the template debug mode.
     */
    'debug' => false,

    /*
     * Forces the compilation of templates every time.
     *
     * Caution: do not set this true on production.
     */
    'force_compile' => false,

    /*
     * Turns on/off the strict mode.
     */
    'strict' => false,

    /*
     * Turns on/off the creation os sub-directories for compiled/cache files.
     */
    'use_sub_dirs' => false,

    'paths' => [
        /*
         * The root path of the view templates.
         */
        'templates' => __DIR__ . '/../app/Views',

        /*
         * The path for compiled template directory.
         */
        'compiled' => __DIR__ . '/../var/compiled',

        /*
         * The path to cache directory.
         */
        'cache' => __DIR__ . '/../var/cache',

        /*
         * Path to view templates of the HTTP error pages.
         */
        'errors' => __DIR__ . '/../app/Views/Errors',
    ],
];
