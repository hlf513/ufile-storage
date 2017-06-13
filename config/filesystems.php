<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [
        'ucloud' => [
            'driver'  => 'ucloud-ufile',
            'bucket' => env('UCLOUD_BUCKET'),
            'suffix' => env('UCLOUD_SUFFIX'),
            'public_key'=> env('UCLOUD_ACCESS_KEY'),  //AccessKey
            'secret_key'=> env('UCLOUD_SECRET_KEY'),  //SecretKey
        ]
    ],

];
