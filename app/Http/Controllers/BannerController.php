<?php
    
    namespace App\Http\Controllers;
    
    use App\Components\UUID;
    use App\Model\Banners;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    
    /**
     * Class BannerController
     *
     * This class manage authenticate requests
     *
     * @package App\Http\Controllers;
     * @author  Estarly Olivar
     */
    class BannerController extends Controller {
        
        public static function add() {
            return view('back.banner.add');
        }
        
        public static function create(Request $request) {
            $banner       = new Banners;
            $banner->priority = $request->get('priority');
            $banner->status = $request->get('status');
            $banner->save();
            
            if (isset($banner->id)) {


                if ($request->hasFile('archive')) {

                  $files = $request->file('archive');

                    $upload_image = BackController::upload_image($files,$banner->id);

                    Session::flash('message', 'Creado Banner');
                    return redirect()->route('back.banner.edit', $banner->id);
                }

                Session::flash('message', 'Creado Banner');
                return redirect()->route('back.banner.edit', $banner->id);

            } else {
                return redirect()->back();
            }
        }
        
        public static function edit($id) {
            
            $banner = Banners::find($id);
            
            return view('back.banner.update', ['banner' => $banner]);
            
        }
        
        public static function update(Request $request, $id) {
            $banner       = Banners::find($id);
            $banner->priority = $request->get('priority');
            $banner->status = $request->get('status');
            $banner->save();
    
            if (isset($banner->id)) {
                Session::flash('message', 'Modificado Banner ');
        
                return redirect()->route('back.banner.edit', $banner->id);
            } else {
                return redirect()->back();
            }
        }
        
        public static function all() {
            
            $banners = Banners::orderBy('priority','asc')->get();
            
            return view('back.banner.all', ['banners' => $banners]);
        }
        
        
    }
