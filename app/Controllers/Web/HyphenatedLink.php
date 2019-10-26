<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /hyphenated-link
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Web;

use Springy\HTTP\Response;
use Springy\HTTP\Controller;
use Springy\Template\Template;

/**
 * HyphenatedLink controller.
 */
class HyphenatedLink extends Controller
{
    public function index($args)
    {
        debug('This is the "hyphenated-link" page');
        debug($args);

        $template = new Template('hyphenated-link');
        $template->assign('title', 'Hyphenated link');

        Response::getInstance()->body(
            $template->fetch()
        );
    }

    public function another($args)
    {
        debug('This is the another route for "hyphenated-link" page');
        debug($args);

        $template = new Template('hyphenated-link-another');
        $template->assign('title', 'Another hyphenated link route');

        Response::getInstance()->body(
            $template->fetch()
        );
    }
}
