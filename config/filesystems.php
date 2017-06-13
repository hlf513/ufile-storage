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
        'ufile' => [
            'driver'  => 'ucloud-ufile',
            'bucket' => env('UFILE_BUCKET'),
            'suffix' => env('UFILE_SUFFIX'),
            'public_key'=> env('UFILE_ACCESS_KEY'),  //AccessKey
            'secret_key'=> env('UFILE_SECRET_KEY'),  //SecretKey
        ]
    ],

];
