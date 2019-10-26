<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /bad-request
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Web;

use Springy\Exceptions\HttpErrorBadRequest;
use Springy\HTTP\Controller;

class BadRequest extends Controller
{
    public function index($args)
    {
        debug('This is the "400 Bad Request" error page');
        debug($args);

        throw new HttpErrorBadRequest();
    }
}
