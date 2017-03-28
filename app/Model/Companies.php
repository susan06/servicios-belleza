<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = "companies";
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'user_id',
        'name',
    ];


}
