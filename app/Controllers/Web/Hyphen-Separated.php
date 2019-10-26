<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /hyphen-separated
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

 namespace App\Controllers\Web;

use Springy\HTTP\Response;
use Springy\HTTP\Controller;
use Springy\Template\Template;

/**
 * HyphenSeparated controller.
 */
class HyphenSeparated extends Controller
{
    public function index($args)
    {
        debug('This is the "hyphen-separated" page');
        debug($args);

        $template = new Template('hyphen-separated');
        $template->assign('title', 'Another hyphenated link');

        Response::getInstance()->body(
            $template->fetch()
        );
    }
}
