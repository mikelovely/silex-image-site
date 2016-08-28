<?php

namespace AI\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Application;

class UploadcareProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['uploadcare'] = function($app) {
            return new \Uploadcare\Api('bcfe11f8c55711d51a20', 'a460f231616c68721e04');
        };
    }

    public function boot(Application $app)
    {
        //
    }
}