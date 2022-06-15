<?php
return [
    'handle' => [
        //
        /**
         * @param bool auto_discover
         * if false, you need to bind ApiHandler to Illuminate\Contracts\Debug\ExceptionHandler
         * or use ApiError::getResponse() in your exception handler
         * or where else in you project to generate correct response
         */
        'auto_discover' => true,
        /**
         * @param array prefixes
         * includes request route prefixes to ApiHandler
         */
        'prefixes' => [
            'api'
        ],
        /**
         * @param array domains
         * includes request domains to ApiHandler
         */
        'domains' => [
            //api.*
        ]
    ]
];
