<?php

namespace App\Security\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Model\Users;

/**
 * Class Role
 *
 * Define users roles properties
 *
 * @package namespace App\Security\Entities
 * @author  Estarly Olivar
 */
class SecurityRole extends Model
{

    protected $table = 'security_roles';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public $incrementing = true;

    protected $fillable = [
        'id',
        'name',
    ];

    /**
     * Relationship with Permission entity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(SecurityPermission::class, 'permission_role', 'role_id', 'permission_id');
    }

    /**
     * Relationship with User entity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(Users::class, 'role_user', 'role_id', 'user_id');
    }
}
