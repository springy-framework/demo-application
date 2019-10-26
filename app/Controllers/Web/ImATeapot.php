<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /im-a-teapot
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Web;

use Springy\Exceptions\HttpErrorImaTeapot;
use Springy\HTTP\Controller;

class ImATeapot extends Controller
{
    public function index($args)
    {
        debug('This is the "418 I\'m a Teapot" error page');
        debug($args);

        throw new HttpErrorImaTeapot();
    }
}
