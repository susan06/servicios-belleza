<?php

namespace App\Http\Controllers;
/**
 * Class ApiController
 *
 * @package App\Http\Controllers;
 * @author  Estarly Olivar
 */
class ApiController extends Controller {

    public function index() {
        return ['api' => '1.0v'];
    }
}
