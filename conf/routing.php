<?php

return [
    /*
     * Default namespace for controllers.
     *
     * @var string
     */
    'namespace' => 'App\\Controllers\\Web\\',

    /*
     * Default URI routes.
     *
     * @var array
     */
    'routes' => [
        'GET:/another-complex-name' => 'App\\Controllers\\Web\\ComplexName@another',
    ],

    /*
     * Default namespaces by URI segments.
     *
     * @var array
     */
    'segments' => [
        '/api' => 'App\\Controllers\\Api',
    ],

    /*
     * Routing configuration by HTTP host.
     *
     * @var array
     */
    'hosts' => [
        'localhost\.localdomain' => [
            'namespace' => 'App\\Controllers\\Test',
            'routes' => [],
            'segments' => [],
        ],
    ],
];
