<?php
    
    namespace App\Providers;
    
    use Illuminate\Support\Facades\Route;
    use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
    
    class RouteServiceProvider extends ServiceProvider {
        /**
         * This namespace is applied to your controller routes.
         *
         * In addition, it is set as the URL generator's root namespace.
         *
         * @var string
         */
        protected $namespace = 'App\Http\Controllers';
        
        /**
         * Define your route model bindings, pattern filters, etc.
         *
         * @return void
         */
        public function boot() {
            parent::boot();
        }
        
        
        /**
         * Define the routes for the application.
         *
         * @return void
         */
        public function map() {
            $this->mapBackRoutes();
            $this->mapApiRoutes();
            $this->mapWebRoutes();
        }
        
        protected function mapBackRoutes() {
            Route::group([
                'middleware' => ['web'],
                'namespace'  => $this->namespace,
                'domain'     => 'admin.' . env('URL_DOMAIN', ''),
            ], function ($router) {
                self::get_routes(base_path('routes/back/'));
            });
        }
        
        protected function mapWebRoutes() {
            Route::group([
                'middleware' => ['web'],
                'namespace' => $this->namespace,
                'domain'    => env('URL_DOMAIN', ''),
            ], function ($router) {
                self::get_routes(base_path('routes/web/'));
            });
        }
        
        protected function mapApiRoutes() {
            Route::group([
                'middleware' => [
                    'api',
                ],
                'namespace'  => $this->namespace,
                'domain'     => 'api.' . env('URL_DOMAIN', ''),
            ], function ($router) {
                self::get_routes(base_path('routes/api/'));
            });
        }
        
        public function get_routes($dir) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if (!is_dir($dir . $file) && $file != "." && $file != "..") {
                        require $dir . $file;
                    } elseif ($file != "." && $file != "..") {
                        self::get_routes($dir . $file . '/');
                    }
                }
                closedir($dh);
            }
        }
    }
