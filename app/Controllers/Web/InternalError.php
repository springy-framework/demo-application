<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /internal-error
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Web;

use Springy\HTTP\Response;
use Springy\HTTP\Controller;

class InternalError extends Controller
{
    public function index($args)
    {
        debug('This is the "500 Internal Server Error" page');

        // Forcing a division by zero to cause error.
        $undefined = (string) (1 / 0);

        Response::getInstance()->body($undefined);
    }
}
