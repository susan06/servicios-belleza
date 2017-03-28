<?php

namespace App\Components;

use App\Http\Controllers\Controller;
use App\Model\Countries;

class Country extends Controller { 
    
    public static function countries(){
        $country = Countries::all();
        return $country;
    }
}