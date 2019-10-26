<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /forbidden
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Web;

use Springy\HTTP\Response;
use Springy\HTTP\Controller;

class Forbidden extends Controller
{
    protected $authNeeded = true;

    public function index($args)
    {
        debug('This is the "forbidden" page');
        debug($args);

        $body = 'If you see this message, then you are authenticated in the application.';

        Response::getInstance()->body($body);
    }
}
