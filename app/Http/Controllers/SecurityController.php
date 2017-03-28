<?php
    
    namespace App\Http\Controllers;
    use App\Components\UUID;
    use App\Model\Users;
    use App\Security\Entities\SecurityPermission;
    use App\Security\Entities\SecurityRole;
    use App\Security\Repositories\PermissionsRepo;
    use App\Security\Repositories\RolesRepo;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;

    /**
     * Class SecurityController
     *
     * This class manage authenticate requests
     *
     * @package App\Http\Controllers;
     */
    class SecurityController extends Controller
    {

        public static function add_roles()
        {
            return view('back.security.roles.add_roles');
        }

        public static function create_roles(Request $request)
        {
            $roles = new SecurityRole;
            $roles->name = $request->get('name');
            $roles->save();
            if (isset($roles->id)) {
                Session::flash('message', 'Creado el Rol ' . $roles->name);
                return redirect()->route('back.security.roles.edit', $roles->id);
            } else {
                return redirect()->back();
            }
        }

        public static function edit_roles($id)
        {

            $rolesRepo = new RolesRepo();
            $editRole = $rolesRepo->editRole($id);
            $permis = [];
            foreach ($editRole[0]->permissions as $index => $value) {
                $permis[$value->id] = $value->id;
            }


            $permission = SecurityPermission::all();

            return view('back.security.roles.update_roles', [
                'permissions' => $permission,
                'roles' => $editRole[0],
                'permiss' => $permis
            ]);

        }

        public static function update_roles(Request $request, $id)
        {

            $array = [];
            foreach ($request->get('permission') as $item => $value) {
                $array[$value] = $value;
            }

            $data = [
                'id_rol' => $id,
                'name' => $request->get('name'),
                'permission' => $array,
            ];

            $rolesRepo = new RolesRepo();

            $updateRole = $rolesRepo->updateRole($data);

            if (isset($updateRole->id)) {
                Session::flash('message', 'Modificado el Rol ' . $updateRole->name);
                return redirect()->route('back.security.roles.edit', $updateRole->id);
            } else {
                return redirect()->back();
            }
        }

        public static function all_roles()
        {
            $roles = SecurityRole::with('permissions')->get();
            foreach ($roles as $item => $value) {
                $value->total = count($value->permissions);
            }

            return view('back.security.roles.all_roles', ['roles' => $roles]);
        }

        public static function add_permission()
        {
            return view('back.security.permission.add_permission');
        }

        public static function create_permission(Request $request)
        {
            $permission = new SecurityPermission();
            $permission->name = $request->get('name');
            $permission->save();
            if (isset($permission->id)) {
                Session::flash('message', 'Creado el Permiso ' . $permission->name);
                return redirect()->route('back.security.permission.add');
            } else {
                return redirect()->back();
            }

        }

        public static function edit_permission($id)
        {
            $permission = SecurityPermission::find($id);

            return view('back.security.permission.update_permission', ['permission' => $permission]);
        }

        public static function update_permission(Request $request, $id)
        {
            $permission = SecurityPermission::find($id);
            $permission->name = $request->get('name');
            $permission->save();
            if (isset($permission->id)) {
                Session::flash('message', 'Modificado el Permiso ' . $permission->name);
                return redirect()->route('back.security.permission.edit', $permission->id);
            } else {
                return redirect()->back();
            }

        }

        public static function all_permission()
        {

            $permissions = SecurityPermission::all();

            return view('back.security.permission.all_permission', ['permissions' => $permissions]);
        }

        public static function add_user()
        {
            $roles = SecurityRole::all();
            return view('back.security.user.add_user', ['roles' => $roles]);
        }

        public static function create_user(Request $request)
        {
            $user = new Users();
            $user->firstname = $request->get('username');
            $user->lastname = $request->get('username');
            $user->username = $request->get('username');
            $user->email = $request->get('email');
            $user->password = $request->get('password');
            $user->status = $request->get('status');
            $user->token = UUID::v4();
            $user->save();

            if (isset($user->id)) {
                Session::flash('message', 'Creado el Usuario ' . $user->name);
                return redirect()->route('back.security.user.edit', $user->id);
            } else {
                return redirect()->back();
            }

        }

        public static function edit_user($id)
        {
            $user = Users::find($id);

            $RoleUser        = new RolesRepo;
            $user->roles = $RoleUser->userRoles($user->id);

            $array = [];
            foreach ($user->roles as $item => $value) {
                $array[$value->id] = $value->id;
            }

            $roles = SecurityRole::all();

            return view('back.security.user.update_user', [
                'user' => $user,
                'array' => $array,
                'roles' => $roles
            ]);
        }

        public static function update_user(Request $request, $id)
        {

            $user = Users::find($id);
            $user->status = $request->get('status');
            $user->save();

            if (isset($user->id)) {

                if ($request->get('rol') != "") {
                    $deleteRoleUser = RolesRepo::deleteRoleUSer($user->id);
                    $addRoleUser    = new RolesRepo();

                    foreach ($request->get('rol') as $item => $value) {
                        $add = $addRoleUser->addRole($user->id, $value);
                    }

                }else{
                    $deleteRoleUser = RolesRepo::deleteRoleUSer($user->id);
                }

                Session::flash('message', 'Modificado el Usuario ' . $user->name);
                return redirect()->route('back.security.user.edit', $user->id);
            } else {
                return redirect()->back();
            }

        }

        public static function all_user()
        {
            $users = Users::all();

            return view('back.security.user.all_user', ['users' => $users]);
        }

    }
