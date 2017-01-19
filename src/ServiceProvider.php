<?php
namespace Seguce92\Filemanager;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * [boot description]
     * @method boot
     * @return [Illuminate\ServiceProvider\boot] [charge all resources used in package]
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/filemanager.php' => config_path('seguce92/filemanager.php')], 'seguce92.filemanager');

        $this->publishes([__DIR__. '/public' => public_path('vendor/seguce92/filemanager')], 'Filemanager-public');

        $this->publishes([__DIR__. '/filemanager' => public_path('filemanager')], 'Filemanager-public');

        $this->publishes([__DIR__. '/source' => public_path('source')], 'Filemanager-public');

        $this->publishes([__DIR__. '/thumbs' => public_path('thumbs')], 'Filemanager-public');

        $this->publishes([__DIR__ . '/resources/views/tinymce.blade.php' => resource_path('views/vendor/seguce92/filemanager/tinymce.blade.php')], 'FileManager');

        $this->loadViewsFrom(__DIR__. '/resources/views', 'filemng');
    }

    /**
     * [register description]
     * @method register
     * @return [Illuminate\ServiceProvider\register]   [Seguce92\Filemanager\FileManagerFacade]
     */
    public function register()
    {
        $this->app->bind('seguce92.filemanager', function ($app) {
            return new FileManager($app);
        });
    }
}
