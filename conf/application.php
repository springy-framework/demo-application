<?php

return [
    /*
     * Application debug mode.
     *
     * When the application is in debug mode, erros messages, debug traces
     * and other debug informations will be shown.
     *
     * @var bool
     */
    'debug' => true,

    /*
     * Authentication driver configuration.
     *
     * @var array
     */
    'authentication' => [
        /*
         * Password hasher.
         *
         * A string with full namespace of the password hasher class
         * or a Springy\Security\HasherInterface object
         * or a closure function that returns a Springy\Security\HasherInterface object
         *
         * Default: 'Springy\Security\BCryptHasher'
         *
         * @var string|Springy\Security\HasherInterface|Closure
         */
        'hasher' => 'Springy\Security\BCryptHasher',

        /*
         * Authentication driver.
         *
         * A Springy\Security\AuthDriver object
         * or a closure function that returns a Springy\Security\AuthDriver object
         *
         * The sample function is the default and is good enough for many projects.
         *
         * @var Springy\Security\AuthDriver|Closure
         */
        'driver' => function ($data) {
            $hasher = $data['user.auth.hasher'];
            $user = $data['user.auth.identity'];

            return new Springy\Security\AuthDriver($hasher, $user);
        },

        /*
         * Authentication identity.
         *
         * A string with full namespace of the authentication identity class
         * or a Springy\Security\IdentityInterface object
         * or a closure function that returns a Springy\Security\IdentityInterface object
         *
         * @var string|Springy\Security\IdentityInterface|Closure
         */
        // 'identity' => null,
        'identity' => 'App\Extensions\User',

        /*
         * Authentication credential to grant access to the internal console terminal.
         *
         * This is a array with user name (index 0) and password (index 1).
         *
         * @var array
         */
        'terminal' => [
            env('TERMINAL_USER', 'springy'),
            env('TERMINAL_PASS', 'terminal'),
        ],
    ],
];
