<?php

return [

    /*
     * By default only 5 mails per second will be sent to avoid overwhelming your
     * e-mail sending service. To use this feature you must have Redis installed.
     */
    'throttling' => [
        'enabled' => true,
        'redis_connection_name' => 'default',
        'redis_key' => 'laravel-mailcoach',
        'allowed_number_of_jobs_in_timespan' => 10,
        'timespan_in_seconds' => 1,
        'release_in_seconds' => 5,
    ],
];
