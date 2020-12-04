<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /other/test
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Web\Other;

use Springy\HTTP\Response;
use Springy\HTTP\Controller;
use Springy\Template\Template;

class Test extends Controller
{
    public function index($args)
    {
        debug('This is the "other/test" page');
        debug($args);

        $template = new Template('other-test');
        $template->assign('title', 'Test in other subdirectory');

        Response::getInstance()->body(
            $template->fetch()
        );
    }
}
