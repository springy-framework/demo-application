<?php

/**
 * Demo Application main page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Web;

use Springy\HTTP\Response;
use Springy\HTTP\Controller;
use Springy\Template\Template;

/**
 * Index controller.
 */
class Index extends Controller
{
    public function index($args)
    {
        debug('This is the "index" page');
        debug($args);

        $template = new Template('index');
        $template->assign('welcome', 'Hello world!');

        Response::getInstance()->body(
            $template->fetch()
        );
    }
}
