<?php

return [
    /*
     * Default database connection.
     */
    'default' => 'mysql',

    /*
     * Path to JSON structure files directory.
     *
     * Default: 'app/Stuctures'
     */
    'model_structures' => __DIR__.'/../app/Structures',

    /*
     * Connections.
     */
    'connections' => [
        /*
         * MySQL sample configuration connection.
         */
        'mysql' => [
            /*
             * Driver name.
             */
            'driver' => 'mysql',

            /*
             * Server host.
             */
            'host' => env('DB_HOST', 'localhost'),

            /*
             * Database user name.
             */
            'username' => env('DB_USER', 'root'),

            /*
             * Databae user password.
             */
            'password' => env('DB_PASS', '123'),

            /*
             * Database name.
             */
            'database' => env('DB_NAME', 'test'),

            /*
             * Migration scripts directory.
             */
            'migration' => [
                'dir' => __DIR__.'/../migrations/mysql',
                'namespace' => 'App',
            ],
        ],

        /*
         * PostgreSQL sample configuration connection.
         */
        'postgres' => [
            /*
             * Driver name.
             */
            'driver' => 'pgsql',

            /*
             * Server host.
             */
            'host' => env('DB_HOST', 'localhost'),

            /*
             * Database user name.
             */
            'username' => env('DB_USER', 'pgsql'),

            /*
             * Databae user password.
             */
            'password' => env('DB_PASS', '123'),

            /*
             * Database name.
             */
            'database' => env('DB_NAME', 'test'),

            /*
             * Database schema
             */
            'schema'   => env('DB_SCHEMA', 'public'),
        ],

        /*
         * SQLite sample configuration connectio.
         */
        'sqlite' => [
            /*
             * Driver name.
             */
            'driver' => 'sqlite',

            /*
             * Database file.
             */
            'database' => env('DB_NAME', ':memory:'),

            /*
             * Foreign key constraints.
             */
            'foreign_key_constraints' => '',
        ],
    ],
];
