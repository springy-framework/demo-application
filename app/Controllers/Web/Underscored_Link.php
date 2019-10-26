<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /underscored_Link
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Web;

use Springy\HTTP\Response;
use Springy\HTTP\Controller;
use Springy\Template\Template;

/**
 * Underscored_Link class.
 *
 * Will works but is not PSR complied.
 */
class Underscored_Link extends Controller
{
    public function index($args)
    {
        debug('This is the "underscored_Link" page');
        debug($args);

        $template = new Template('underscored-Link');
        $template->assign('title', 'Underscored link');

        Response::getInstance()->body(
            $template->fetch()
        );
    }
}
