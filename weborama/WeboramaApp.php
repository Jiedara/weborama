<?php

namespace Weborama;

use Weborama\Routing\Router;
use Weborama\Display\Displayer;
use Weborama\Helpers\Objects\Singletons;

final class WeboramaApp extends Singletons
{
    //run the app
    public function run()
    {
        $result = (new Router)->run();
        Displayer::endResultView($result);
        Displayer::render();
    }

    //close the app
    public function close()
    {
        die;
    }

    public static function loadHelpers()
    {
        require('Helpers/helpers.php');
    }

    public static function loadRoutes()
    {
        require(ROOT_PATH . '/routes.php');
    }
}