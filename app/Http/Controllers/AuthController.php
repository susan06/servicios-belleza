<?php

namespace App\Http\Controllers;

use App\Security\Enums\SecurityPermission;
use App\Security\Enums\SecurityRoles;
use App\Security\Repositories\RolesRepo;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 * Class AuthController
 *
 * This class manage authenticate requests
 *
 * @package App\Http\Controllers;
 * @author  Estarly Olivar
 */
class AuthController extends Controller
{

    public function login() {

        return view('auth.login');
    }
    
    public function logout() {
        
        Auth::logout();
        return redirect()->route('auth.login');

    }

    public function authenticate(Request $request, RolesRepo $rolesRepo) {
        $username = $request->input('username');
        $password = $request->input('password');
        $credentials = [
            'username' => $username,
            'password' => $password,
        ];

        if (Auth::attempt($credentials)) {

          $user = Auth::user();

            if (!$user->status) {
                Session::flash('warning', 'Verifique su cuenta' . Auth::user()->username);
                return redirect()->route('auth.logout');

            }

            $roles = collect();
            $permissions = collect();

            $rolesData = $rolesRepo->userRoles($user->id);

            foreach ($rolesData as $role) {
                $roles->push($role->id);
            }

            foreach ($rolesData as $role) {
                foreach ($role->permissions as $permission) {
                    $permissions->push($permission->id);
                }
            }

            $unique_roles = $roles->unique()->values()->all();
            $unique_permissions = $permissions->unique()->values()->all();

            if (Gate::allows('permission', [
                SecurityPermission::$dashboard,
                $unique_permissions,
            ])
            ) {
                Session::put('roles', $unique_roles);
                Session::put('permissions', $unique_permissions);

                foreach (Session::get('roles') as $item => $value){
                    if($value == SecurityRoles::$developer || $value == SecurityRoles::$super_admin || $value == SecurityRoles::$branch){
                        Session::flash('message', 'Bienvenido ' . $username);
                        return redirect()->route('back.index');
                    }else{
                        
                        Session::flash('message', 'Bienvenido ' . $username);
                        return redirect()->route('web.index');
                    }
                }

            } else {

                Session::flash('warning', 'Usted no tiene acceso...');

                Auth::logout();
                return view('auth.login');
            }


        }
        Session::flash('warning', 'Datos Incorrectos');
        return redirect()->route('auth.login');

    }

    public function register_view() {
        return view('auth.register');
    }

    public function register(Request $request) {
         User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('auth.login');
    }
}
