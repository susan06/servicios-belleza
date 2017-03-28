<?php

namespace App\Security\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SecurityPermission
 *
 * Define users permissions properties
 *
 * @package namespace App\Security\Entities
 * @author  Estarly Olivar
 */
class SecurityPermission extends Model
{
    /**
     * Table
     *
     * @var string
     */
    protected $table = 'security_permissions';
    
    protected $primaryKey = 'id';

    public $timestamps = false;

    public $incrementing = true;

    protected $fillable = [
        'id',
        'name',
    ];
}
