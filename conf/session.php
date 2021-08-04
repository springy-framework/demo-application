<?php

return [
    /*
     * The session engine driver.
     *
     * 'Standard'
     * The standard PHP session driver. Session data will be saved in local files.
     *
     * 'Memcached'
     * The session data will be saved in a Memcached service.
     */
    'engine' => 'Standard',

    /*
     * The session id cookie name.
     */
    'name' => 'SPSESSID',

    /*
     * The session cookie domain.
     */
    'domain' => '',

    /*
     * Session expiration time in minutes.
     *
     * Value used by Memcached session driver.
     */
    'expires' => 60,

    /*
     * Session server host.
     *
     * Value used by Memcached session driver.
     */
    'host' => 'localhost',

    /*
     * Session servir service port.
     *
     * Value used by Memcached session driver.
     */
    'port' => 11211,

    /*
     * Session cookie secure.
     *
     * Boolean: true|false
     */
    'secure' => false,
];
