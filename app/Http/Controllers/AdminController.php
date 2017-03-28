<?php
    
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    /**
     * Class AdminController
     *
     * This class manage authenticate requests
     *
     * @package App\Http\Controllers;
     * @author  Estarly Olivar
     */
    class AdminController extends Controller {
        
        public static function add() {
            return view('back.admin.add');
        }
    
        public static function add_post(Request $request) {
            return $request->all();
        }
        
    }
