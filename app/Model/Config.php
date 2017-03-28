<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = "config";
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'company_id',
        'name',
    ];


}
