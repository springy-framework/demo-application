<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /error503
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Web;

use Springy\Exceptions\HttpErrorServiceUnavailable;
use Springy\HTTP\Controller;

class Error503 extends Controller
{
    public function index($args)
    {
        debug('This is the "503 Service Unavailable" page');
        debug($args);

        throw new HttpErrorServiceUnavailable();
    }
}
