<?php
/**
 * Application controler example.
 *
 * This controller will be found without route need by the following URI:
 * /other/test
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/core/blob/master/LICENSE MIT
 */
namespace App\Controllers\Test;

use Springy\HTTP\Response;
use Springy\HTTP\Controller;

class Index extends Controller
{
    public function index($args)
    {
        debug('This is the "index" page');

        $body = '<html><head><title>Test host | Springy Framework</title></head><body>'
            .'<h1>Test host</h1>'
            .'<a href="//springy.localhost.com.br">back</a><br>'
            .'</body></html>';

        Response::getInstance()->body($body);
    }
}
