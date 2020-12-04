<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /sample and /sample/some-endpoint
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Web\Sample;

use Springy\HTTP\Response;
use Springy\HTTP\Controller;
use Springy\Template\Template;

class Index extends Controller
{
    public function index($args)
    {
        debug('This is the "sample" page');
        debug($args);

        $template = new Template('sample');
        $template->assign('title', 'Index of a subdirectory');

        Response::getInstance()->body(
            $template->fetch()
        );
    }

    public function endpoint($args)
    {
        debug('This is the "sample/endpoint" page');
        debug($args);

        $template = new Template('sample-endpoint');
        $template->assign('title', 'Endpoint in index of a subdirectory');

        Response::getInstance()->body(
            $template->fetch()
        );
    }
}
