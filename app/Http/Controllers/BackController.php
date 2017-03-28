<?php
    
    namespace App\Http\Controllers;
    
    use App\Components\Helper;
    use App\Model\Banners;
    use App\Model\Users;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;
    
    /**
     * Class BackController
     *
     * This class manage authenticate requests
     *
     * @package App\Http\Controllers;
     * @author  Estarly Olivar
     */
    class BackController extends Controller {
        
        public function index() {
            return view('back.index');
        }
        
        public static function status() {
            return $status = [
                true  => 'Activado',
                false => 'Desactivado',
            ];
        }
        
        public static function priority() {
            return $priority = [
                1  => 'Primero',
                2  => 'Segundo',
                3  => 'Tercero',
                4  => 'Cuarto',
                5  => 'Quinto',
                6  => 'Sexto',
                7  => 'Septimno',
                8  => 'Octavo',
                9  => 'Noveno',
                10 => 'Decimo',
            ];
        }
        
        public static function account_details() {
            
            return view('back.account.details');
        }
        
        public static function account_update(Request $request) {
            
            $account            = Users::find($request->get('id'));
            $account->firstname = $request->get('firstname');
            $account->lastname  = $request->get('lastname');
            if ($request->has('password')) {
                $account->password = bcrypt($request->get('password'));
            }
            $account->save();
            
            return redirect()->back();
        }
        
        public static function upload_image($files, $id) {
            
            $array = [];
            foreach ($files as $item => $value) {
                
                $name = $value->getClientOriginalName();
                $name = str_replace(' ', '', $name);
                
                $route = 'banner/' . $id . '/' . $name;
                
                $response = Storage::put($route, File::get($value));
                
                $array[$name] = $route;
                
            }

            $banner          = Banners::find($id);
            $array_bd          = Helper::object_array($banner->details);
            $banner->details = array_merge($array_bd, $array);
            $banner->save();
            
            return $data = Helper::array_object($banner);
            
        }
    }
