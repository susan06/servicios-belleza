<?php

namespace App\Security\Repositories;

use App\Components\Helper;
use App\Security\Entities\SecurityPermission;

/**
 * Class PermissionsRepo
 *
 * This class manage Permission entity data
 *
 * @package App\Security\Repositories
 * @author  Estarly Olivar
 */
class PermissionsRepo
{
    /**
     * Get permissions ordered by name property
     *
     * @return mixed
     */
    public function getPermissions()
    {
        $permissions = SecurityPermission::orderBy('name', 'asc')
            ->get();
        return $permissions;
    }
    
    public function createPermission($data){
        
        $data = Helper::array_object($data);

        $per = new SecurityPermission();
        $per->name = $data->name;
        $per->save();
        
        return $per;
        
    }
    
    public function updatePermission($data){
        
        $data = Helper::array_object($data);
        
        $per = SecurityPermission::find($data->id_permission);
        $per->name = $data->name;
        $per->save();

        return $per;

    }
}
