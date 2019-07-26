<?php

namespace Kademo\Providers;

use IO\Helper\TemplateContainer;
use IO\Helper\ResourceContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

/**
 * Class KademoServiceProvider
 * @package Kademo\Providers
 */
class KademoServiceProvider extends ServiceProvider
{
    const PRIORITY = 98;

    public function register()
    {

    }

    public function boot(Twig $twig, Dispatcher $dispatcher)
    {

    }
}

