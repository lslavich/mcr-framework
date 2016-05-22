<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Routing\RouteCollectionBuilder;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AppKernel extends MicroKernel
{
    public function registerBundles()
    {
        return [];
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $routes->add('/', 'kernel:micro');
    }

    protected function configureServices(ContainerBuilder $cb, LoaderInterface $loader)
    {
        $cb->setParameter('kernel.secret', 'micro');
    }

    public function micro()
    {
        return new Response('micro');
    }
}
