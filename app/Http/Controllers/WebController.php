<?php

namespace App\Http\Controllers;

/**
 * Class WebController
 *
 * @package App\Http\Controllers;
 * @author  Estarly Olivar <- es pato
 */
class WebController extends Controller {

    public function index() {
        return view('web.index');
    }

    public function search_advanced() {
        return view('web.search_advanced');
    }

    public function spas() {
        return view('web.spas');
    }

    public function home() {
        return Auth::user();
        return view('web.welcome');
    }
}
