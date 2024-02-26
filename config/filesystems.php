<?php

return [

    'default' => 'public',

    'disks' => [

        'public' => [
            'driver' => 'local',
            'root' => public_path(),
            'url' => env('APP_URL') . '/',
            'visibility' => 'public',
        ],

    ],

];
