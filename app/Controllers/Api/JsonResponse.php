<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /api/json-response
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Api;

use Springy\HTTP\Controller;
use Springy\HTTP\Request;
use Springy\Utils\JSON;

class JsonResponse extends Controller
{
    public function index($args)
    {
        debug('This is the "json-response" page');
        debug($args);

        $json = new JSON();
        $json->setData([
            'Request' => Request::getInstance()->getMethod(),
            'Speeks' => [
                'Homer' => 'Duh!',
                'Nelson' => 'Ha ha!',
                'Maggie' => 'Chup chup!',
            ],
        ]);
        $json->send();
    }
}
