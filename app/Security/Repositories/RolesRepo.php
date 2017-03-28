<?php

namespace App\Security\Repositories;

use App\Security\Entities\SecurityRole;

/**
 * Class RolesRepo
 *
 * This class manage Role entity data
 *
 * @package App\Security\Repositories
 * @author  Estarly Olivar
 */
class RolesRepo
{

    public function addRole($user, $role)
    {
        $role = SecurityRole::find($role);
        $role->users()->attach($user);
        return $role;
    }
    
    public function newRole($permissions, $role_id)
    {
        $role = SecurityRole::find($role_id);
        $role->permissions()->attach($permissions);
        return $role;
    }
    
    public static function deleteRole($user, $role)
    {
        $deleteRole = \DB::select('DELETE from role_user WHERE role_id = ? AND user_id = ? ', [
            $role,
            $user,
    ]);
        return $deleteRole;
    }

    public static function deleteRoleUSer($user)
    {
        $deleteRole = \DB::select('DELETE from role_user WHERE user_id = ? ', [
            $user,
        ]);
        
        return $deleteRole;
    }
    
    public static function getRole($user, $role)
    {
        $deleteRole = \DB::select('Select * from role_user WHERE role_id = ? AND user_id = ? ', [
            $role,
            $user,
        ]);

        if(isset($deleteRole[0]->role_id)){
            $deleteRole = TRUE;
        }else{
            $deleteRole = FALSE;
        }
        
        return $deleteRole;
    }

    public function getRoles()
    {
        $roles = SecurityRole::orderBy('name', 'asc')
            ->get();
        return $roles;
    }

    public function userRoles($user)
    {
        $roles = SecurityRole::with(['permissions'])
            ->whereHas('users', function($query) use($user) {
                $query->where('id', $user);
            })
            ->get();
        return $roles;
    }

    public function updateRole($data){

        $role = SecurityRole::find($data['id_rol']);
        $role->permissions()->detach();



        $return = $this->newRole($data['permission'],$data['id_rol']);

        $roleName = $this->nameRole($data);
        
        return $return;
    }
    
    public function nameRole($data){

        $role = SecurityRole::find($data['id_rol']);
        $role->name = $data['name'];
        $role->save();
    }
    
    public function createRole($data){
        
        $role = new SecurityRole();
        $role->name = $data['name'];
        $role->save();
    
        $return = $this->newRole($data['permission'],$role->id);
        
        return $return;
    }
    
    public function editRole($id){
        
        
        $roles = SecurityRole::with('permissions')->where('id',$id)->get();
        
        return $roles;
    }
}
