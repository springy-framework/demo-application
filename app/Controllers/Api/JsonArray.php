<?php

/**
 * Demo Application page controler.
 *
 * This controller will be found by internal auto-route at the following URI:
 * /api/json-array
 *
 * @author  Fernando Val <fernando@fval.com.br>
 * @license https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Controllers\Api;

use Springy\HTTP\Controller;
use Springy\Utils\JSON;

class JsonArray extends Controller
{
    public function index($args)
    {
        debug('This is the "json-array" page');
        debug($args);

        $json = new JSON();
        $json->setData([
            [
                "id" => 1,
                "name" => 'Homer',
            ],
            [
                "id" => 2,
                "name" => 'Nelson',
            ],
            [
                "id" => 3,
                "name" => 'Maggie',
            ],
        ]);
        $json->send();
    }
}
