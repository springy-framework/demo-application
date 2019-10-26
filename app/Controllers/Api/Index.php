<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /api
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Api;

use Springy\HTTP\Controller;

class Index extends Controller
{
    public function index($args)
    {
        debug('This is the "/api" page');
        debug('Will return a "400 Bad Request" error page');
        debug($args);

        throw new HttpErrorBadRequest();
    }
}
