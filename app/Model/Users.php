<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $fillable   = [
        'id',
        'username',
        'email',
        'password',
        'firstname',
        'lastname',
        'details',
        'token',
        'status',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setDetailsAttribute($value) {
        $this->attributes['details'] = json_encode($value);
    }

    public function getDetailsAttribute($value) {
        return json_decode($value);
    }

    public function getFullNameAttribute() {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function permissions() {
        return $this->hasMany('App\Model\Permissions', 'user', 'id');
    }

}
