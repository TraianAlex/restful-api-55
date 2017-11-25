<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */

    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],//['mydomain.com','otherdomain.com']
    'allowedHeaders' => ['*'],//['Authorization'] or Origin
    'allowedMethods' => ['*'],//['POST']
    'exposedHeaders' => [],
    'maxAge' => 0,

];
