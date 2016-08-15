<?php


namespace JeroenNoten\LaravelFormat;


use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\BladeDirective;

class ServiceProvider extends BaseServiceProvider
{
    use BladeDirective;

    public function boot()
    {
        $this->bladeDirective('timestamp', Format::class, 'timestamp');
    }

    public function register()
    {
        //
    }

    /**
     * Return the container instance
     *
     * @return Container
     */
    protected function getContainer()
    {
        return $this->app;
    }
}