<?php


return [

    "activity_log" => "List of activity on the site",

    'laravel' => [
        'health' => 'Monitor the health of the application',
        'horizon' => 'Horizon allows you to easily monitor key metrics of your queue system such as job throughput, runtime, and job failures.',
        'telescope' => 'Telescope provides insight into the requests coming into your application, exceptions, log entries, database queries, queued jobs, mail, notifications, cache operations, scheduled tasks, variable dumps, and more.',
        'telescope_log' => 'The Telescope log watcher records the log data for any logs written by your application.',
        'telescope_mail' => 'The Telescope mail watcher allows you to view an in-browser preview of the emails along with their associated data. You may also download the email as an .eml file.',
        'telescope_schedule' => 'The Telescope schedule watcher records the command and output of any scheduled tasks run by your application.',
        'telescope_queue' => 'The Telescope job watcher records the data and status of any jobs dispatched by your application.'
    ],

    'manage' => [
        'leads' => 'Manage leads, businesses and contacts'
    ],

    'request' => [
        'log' => "Log HTTP request and response."
    ],

    'supported_platforms' => [
        'android' => [
            'minimum_version' => "Android Minimum Supported Version: :version",
            'current_version' => "Android Current Version: :version",
        ],
        'iOS' => [
            'minimum_version' => "iOS Minimum Supported Version: :version",
            'current_version' => "iOS Current Version: :version",
        ],
        'web' => [
            'minimum_version' => "Web Minimum Supported Version: :version",
            'current_version' => "Web Current Version: :version",
        ],
    ],

    'system' => [
        'info' => "Display system information.",
        'feature_management' => "Enable and disable buy or sell features for all customers"
    ],

    'user' => [
        'management' => 'Manage Users and their identities.',
        'permission' => 'Manage User Permissions'
    ],

]

?>
