<?php
namespace Xujif\UcloudUfileStorage;

use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;

class UfileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->make('filesystem')->extend('ucloud-ufile', function ($app, $config) {
            $ufileAdapter = new UcloudUfileAdapter(
                $config['bucket'],
                $config['public_key'],
                $config['secret_key'],
                $config['suffix']
            );
            $fs = new Filesystem($ufileAdapter);
            return $fs;
        }
        );
    }

    public function register()
    {
        $this->app->singleton('filesystem', function ($app) {
            return $app->loadComponent('filesystems', 'Illuminate\Filesystem\FilesystemServiceProvider', 'filesystem');
        });
    }
}
