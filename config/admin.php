<?php


return [

    'dashboard_items' => [
        // 'health_check' => [
        //     'title' => "System Health Check",
        //     'description' => 'help.laravel.health',
        //     'route' => ['admin.system.health', ['fresh']],
        //     'icon' => 'fa-solid fa-map-location-dot'
        // ],
        'laravel_horizon' => [
            'title' => "Laravel Horizon",
            'description' => 'help.laravel.horizon',
            'route' => 'horizon.index',
            'icon' => 'fa-brands fa-laravel'
        ],
        'laravel_telescope' => [
            'title' => "Laravel Telescope",
            'description' => 'help.laravel.telescope',
            'route' => 'telescope',
            'icon' => 'fa-brands fa-laravel'
        ],
        'laravel_telescope_log' => [
            'title' => "Laravel Telescope Log",
            'description' => 'help.laravel.telescope_log',
            'route' => ['telescope', ['logs']],
            'icon' => 'fa-brands fa-laravel'
        ],
        'laravel_telescope_mail' => [
            'title' => "Laravel Telescope Mail",
            'description' => 'help.laravel.telescope_mail',
            'route' => ['telescope', ['mail']],
            'icon' => 'fa-brands fa-laravel'
        ],
        'laravel_telescope_schedule' => [
            'title' => "Laravel Telescope Schedule",
            'description' => 'help.laravel.telescope_schedule',
            'route' => ['telescope', ['schedule']],
            'icon' => 'fa-brands fa-laravel'
        ],
        'laravel_telescope_queue' => [
            'title' => "Laravel Telescope Queue",
            'description' => 'help.laravel.telescope_queue',
            'route' => ['telescope', ['jobs']],
            'icon' => 'fa-brands fa-laravel'
        ],
        'user_management' => [
            'title' => "User Management",
            'description' => 'help.user.management',
            'route' => 'lumki.users.index',
            'icon' => 'fa-solid fa-users'
        ],
        'user_roles' => [
            'title' => "User Permissions and Roles",
            'description' => 'help.user.permission',
            'route' => 'lumki.roles.index',
            'icon' => 'fa-solid fa-user-shield '
        ],

    ]


]


?>
